<?php namespace Dynamic;

class Dynamic {

    /**
     * The paths.
     *
     * @var array
     */
    protected $paths = [];

    /**
     * Redirect all calls matching $pattern to $method.
     *
     * @param string $pattern
     * @param string $method
     * @return void
     */
    public function redirect($pattern, $method)
    {
        $this->paths[$pattern] = $method;
    }

    /**
     * Get all paths added.
     *
     * @return array
     */
    public function getAllPaths()
    {
        return $this->paths;
    }

    /**
     * Handle method calls.
     *
     * @param mixed $instance
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function handle($instance, $method, array $arguments = [])
    {

    }

}

