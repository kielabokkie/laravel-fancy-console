<?php

namespace Kielabokkie\FancyConsole\Traits;

trait FancyConsole
{
    private $dotTotal;
    private $dotWidth;
    private $dotCount = 0;

    /**
     * Success line that gets prepended with a colourful SUCCESS.
     */
    public function success(string $message, string $text = 'SUCCESS')
    {
        $this->info(
            sprintf(
                '<fg=black;bg=green> %s </> %s',
                $text,
                $message
            )
        );
    }

    /**
     * Fail line that gets prepended with a colourful FAIL.
     */
    public function fail(string $message, string $text = 'FAIL')
    {
        $this->info(
            sprintf(
                '<fg=white;bg=red> %s </> <fg=red>%s</>',
                $text,
                $message
            )
        );
    }

    /**
     * A green success block that's nicely padded.
     */
    public function successBlock(string $message)
    {
        $this->output->success($message);
    }

    /**
     * A red error block that's nicely padded.
     */
    public function errorBlock(string $message)
    {
        $this->output->error($message);
    }

    /**
     * Add a progress dot but no newline.
     */
    public function dot(string $symbol = '.')
    {
        $this->dotCount++;

        $text = $symbol;
        $newline = false;

        if ($this->dotCount % $this->dotWidth === 0) {
            $text = sprintf(
                '%s [%s%s]',
                $symbol,
                $this->dotCount,
                $this->dotTotal > 0 ? '/' . $this->dotTotal : ''
            );

            $newline = true;
        }

        $this->output->write($text, $newline);
    }

    /**
     * Set the max number of progress dots allowed on one line.
     */
    public function setDotWidth(int $width): void
    {
        $this->dotWidth = $width;
    }

    /**
     * Set the total number of progress dots that are expected.
     */
    public function setDotTotal(int $total): void
    {
        $this->dotTotal = $total;
    }
}
