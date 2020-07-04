<?php

namespace Kielabokkie\FancyConsole\Traits;

trait FancyConsole
{
    /**
     * Success line that gets prepended with a colourful SUCCESS.
     *
     * @param string $string
     * @return string
     */
    public function success($string)
    {
        return $this->info('<fg=black;bg=green> SUCCESS </> ' . $string);
    }

    /**
     * Fail line that gets prepended with a colourful FAIL.
     *
     * @param string $string
     * @return string
     */
    public function fail($string)
    {
        return $this->info('<fg=white;bg=red> FAIL </> ' . $string);
    }

    /**
     * A green success block that's nicely padded.
     *
     * @param string $string
     * @return string
     */
    public function successBlock($string)
    {
        return $this->output->success($string);
    }

    /**
     * A red error block that's nicely padded.
     *
     * @param string $string
     * @return string
     */
    public function errorBlock($string)
    {
        return $this->output->error($string);
    }
}
