<?php

use Easywine\Repo\Wine\WineRepositoryInterface as Wine;

class WinesController extends \BaseController {

	protected $wine;

	public function __construct(Wine $wine)
	{
		$this->wine = $wine;
	}

	/**
	 * Display a listing of the resource.
	 * GET /wines
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /wines
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /wines/{product_code}
	 *
	 * @param  string  $product_code
	 * @return Response
	 */
	public function show($product_code)
	{
		$wine = $this->wine->byProductCode($product_code);
		return View::make('wines.show')->with('wine', $wine);
	}

	/**
	 * Searching for wines by wine type
     * Paginated wines
     * GET /wines/wine_type/{$wine_type}
     */
	public function byWineType($wine_type)
	{
		$pagi_rule['page'] = Input::get('page', 1);
		$pagi_rule['per_page'] = 5;
		$pagi_rule['sort_name'] = Input::get('sort_name', 'wines.created_at');
		$pagi_rule['sort_order'] = Input::get('sort_order', 'desc');
		$pagiData = $this->wine->byWineType($wine_type, $pagi_rule);
		$wines = Paginator::make($pagiData->items, $pagiData->totalItems, $pagi_rule['per_page']);

		if(Request::ajax())
		{
			$html = View::make('wines.search_result')->with('wines', $wines)->render();
			return Response::json(array('html' => $html));
		}

		return View::make('wines.index')->with('wines', $wines);
	}
}