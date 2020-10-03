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
    public function success($string, $text = 'SUCCESS')
    {
        return $this->info(
            sprintf(
                '<fg=black;bg=green> %s </> %s',
                $text,
                $string
            )
        );
    }

    /**
     * Fail line that gets prepended with a colourful FAIL.
     *
     * @param string $string
     * @return string
     */
    public function fail($string, $text = 'FAIL')
    {
        return $this->info(
            sprintf(
                '<fg=white;bg=red> %s </> <fg=red>%s</>',
                $text,
                $string
            )
        );
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
