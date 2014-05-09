<?php namespace Dynamic;

trait DynamicTrait {

    /**
     * Instance of Dynamic.
     *
     * @var Dynamic
     */
    protected $dynamicInstance;

    /**
     * Get instance of Dynamic.
     *
     * @return Dynamic
     */
    public function getDynamicInstance()
    {
        if ( ! $this->dynamicInstance instanceof Dynamic)
        {
            $this->dynamicInstance = new Dynamic;
        }

        return $this->dynamicInstance;
    }

}

