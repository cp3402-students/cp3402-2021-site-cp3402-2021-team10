<?php

namespace GoDaddy\WordPress\MWC\Common\DataSources\Contracts;

/**
 * Data source adapter contract.
 *
 * @since 1.0.0
 */
interface DataSourceAdapterContract
{
    /**
     * Converts from Data Source format.
     *
     * @since 1.0.0
     *
     * @return array
     */
    public function convertFromSource() : array;

    /**
     * Converts to Data Source format.
     *
     * @since 1.0.0
     *
     * @return array
     */
    public function convertToSource() : array;
}
