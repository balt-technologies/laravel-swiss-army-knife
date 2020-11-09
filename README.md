# laravel-swiss-army-knife
A bunch of tools and helpers for Laravel

## UUIDs as unique identifier for models

Just use the Uuid trait and make sure you also set incrementing to false and keyType to string.

    use Balt\Traits\Uuid;
    
    class Entity extends Model 
    {
            
        use Uuid;
    
        public $incrementing = false;

        public $keyType = 'string';