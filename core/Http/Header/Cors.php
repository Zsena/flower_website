<?php

namespace Core\Http\Header;

abstract class Cors
{
    const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';

    const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';

    const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';

    const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';

    const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';

    const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers';

    const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method';

    const ORIGIN = 'Origin';

    const TIMING_ALLOW_ORIGIN = 'Timing-Allow-Origin';
}