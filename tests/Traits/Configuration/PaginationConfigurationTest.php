<?php

namespace Rappasoft\LaravelLivewireTables\Tests\Traits\Configuration;

use Rappasoft\LaravelLivewireTables\Tests\TestCase;

class PaginationConfigurationTest extends TestCase
{
    /** @test */
    public function pagination_theme_can_be_set(): void
    {
        $this->assertSame('tailwind', $this->basicTable->getPaginationTheme());

        $this->basicTable->setPaginationTheme('bootstrap');

        $this->assertSame('bootstrap', $this->basicTable->getPaginationTheme());
    }

    /** @test */
    public function can_set_pagination_status(): void
    {
        $this->assertTrue($this->basicTable->getPaginationStatus());

        $this->basicTable->setPaginationDisabled();

        $this->assertFalse($this->basicTable->getPaginationStatus());

        $this->basicTable->setPaginationEnabled();

        $this->assertTrue($this->basicTable->getPaginationStatus());

        $this->basicTable->setPaginationStatus(false);

        $this->assertFalse($this->basicTable->getPaginationStatus());

        $this->basicTable->setPaginationStatus(true);

        $this->assertTrue($this->basicTable->getPaginationStatus());
    }

    /** @test */
    public function can_set_pagination_visibility_status(): void
    {
        $this->assertTrue($this->basicTable->getPaginationVisibilityStatus());

        $this->basicTable->setPaginationVisibilityDisabled();

        $this->assertFalse($this->basicTable->getPaginationVisibilityStatus());

        $this->basicTable->setPaginationVisibilityEnabled();

        $this->assertTrue($this->basicTable->getPaginationVisibilityStatus());

        $this->basicTable->setPaginationVisibilityStatus(false);

        $this->assertFalse($this->basicTable->getPaginationVisibilityStatus());

        $this->basicTable->setPaginationVisibilityStatus(true);

        $this->assertTrue($this->basicTable->getPaginationVisibilityStatus());
    }
}
