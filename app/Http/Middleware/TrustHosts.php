<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 87d675eca23ee81b856a93f8ab1f093e6c8abf36
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
