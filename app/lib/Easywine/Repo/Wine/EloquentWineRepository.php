<?php namespace Easywine\Repo\Wine;

use Illuminate\Database\Eloquent\Model;

class EloquentWineRepository implements WineRepositoryInterface {

	protected $wine;
	protected $type;
	protected $variety;

	public function __construct(Model $wine,
								Model $type,
								Model $variety)
	{
		$this->wine = $wine;
		$this->type = $type;
		$this->variety = $variety;
	}

	/**
	 * Fetch a specific wine by its product code
	 *
	 * @param String product_code
	 * @return Instance wine
	 */
	public function byProductCode($product_code)
	{
		return $this->wine
					->with('wineDetail')
					->where('product_code', '=', $product_code)
					->first();
	}

	/**
     * Fetch wines by a specific wine type
     *
     * @param string  Wine Type
     * @param int Number of articles per page
     * @return StdClass Object with $items and $totalItems for pagination
     */
	public function byWineType($wine_type, array $pagi_rule)
	{
		$foundType = $this->type->where('type_name', '=', $wine_type)->first()->toArray();

		$result = new \StdClass;
		$result->page = $pagi_rule['page'];
		$result->limit = $pagi_rule['per_page'];
		$result->totalItems = 0;
		$result->items = array();

		$test_something = $this->wine
						->wineType($foundType);

		$wines = $test_something
						->orderBy($pagi_rule['sort_name'], $pagi_rule['sort_order'])
						->skip($pagi_rule['per_page']*($pagi_rule['page']-1))
						->take($pagi_rule['per_page'])
						->get();

			$result->totalItems = $this->totalByWineType($wine_type);
	        $result->items = $wines->all();
	        return $result;
	}

	/**
     * Get total wine count by wine type
     *
     * @param  string  $wine_type  Wine type name
     * @return int     Total wines by wine type
     */
    protected function totalByWineType($wine_type)
    {
        return $this->type->where('type_name', $wine_type)
                    ->first()
                    ->wines()
                    ->count();
    }

    public function fetchVarieties()
    {
    	return $this->variety->all();
    }
}