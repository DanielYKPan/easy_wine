<?php namespace Easywine\Repo\Wine;

interface WineRepositoryInterface {

	/**
	 * Fetch a specific wine by its product code
	 *
	 * @param String product_code
	 * @return Instance wine
	 */
	public function byProductCode($product_code);

	/**
     * Fetch wines by a specific wine type
     *
     * @param string  Wine Type
     * @param array pagination rule(page, per_page, sort_name, sort_order)
     * @return StdClass Object with $items and $totalItems for pagination
     */
	public function byWineType($wine_type, array $pagi_rule);
}