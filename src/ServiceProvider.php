<?php

namespace Nikhilbhatia22\Validator\Color;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Nikhilbhatia22\Validator\Color\Validator as ColorValidator;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('validator', function ($factory, $app) {

            $colorValidator = new ColorValidator();

            $factory->extend('color', function ($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColor($value);
            }, "The value for :attribute is not valid color.");

            $factory->extend('color_hex', function ($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColorAsHex($value);
            }, "The value for :attribute is not valid hex color.");

            $factory->extend('color_rgb', function ($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColorAsRGB($value);
            }, "The value for :attribute is is not valid rgb color.");

            $factory->extend('color_rgba', function ($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColorAsRGBA($value);
            }, "The value for :attribute is not valid rgba color.");

            $factory->extend('color_keyword', function ($attribute, $value, $parameters, $validator) use ($colorValidator) {
                return $colorValidator->isColorAsKeyword($value);
            }, "The value for :attribute is not valid color keyword.");
        });
    }
}
