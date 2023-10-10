<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Libro extends Model
{
    use HasFactory;

    protected function nombre():Attribute{
        return new Attribute(
            get: function ($value) {
                return ucwords($value);
            },

            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    protected function autor():Attribute{
        return new Attribute(
            get: function ($value) {
                return ucwords($value);
            },

            set: function ($value) {
                return strtolower($value);
            }
        );
    }


    protected function descripcion():Attribute{
        return new Attribute(
            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    protected function categoria():Attribute{
        return new Attribute(
            get: function ($value) {
                return ucwords($value);
            },

            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    protected function editorial():Attribute{
        return new Attribute(
            get: function ($value) {
                return ucwords($value);
            },
            
            set: function ($value) {
                return strtolower($value);
            }
        );
    }
}
