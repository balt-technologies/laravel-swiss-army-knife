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
        
## Convert Country Codes from 2 to 3 digits and 3 to 2 digits

    CountryCode::toThreeDigits('DE'); // DEU
    
    CountryCode::toTwoDigits('DEU'); // DE