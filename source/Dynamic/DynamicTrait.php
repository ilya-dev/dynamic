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

    /**
     * Set instance of Dynamic.
     *
     * @param Dynamic $instance
     * @return void
     */
    public function setDynamicInstance(Dynamic $instance)
    {
        $this->dynamicInstance = $instance;
    }

    /**
     * Handle calls to non-existent methods.
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call($method, array $arguments)
    {
        return $this->getDynamicInstance()->handle($this, $method, $arguments);
    }

}

