<?php namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Wordpress
{
    /**
     * Array of items that should be appended
     *
     * @var array
     */
    protected $transformedAttributes = [
        'id',
        'title',
        'slug',
        'content',
        'url',
        'created_at',
        'updated_at',
    ];

    /**
     * Override the Model method to apply some default scopes
     *
     * @return mixed
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('post_type', function (Builder $builder) {
            $variables = get_class_vars(get_called_class());

            $builder
                ->where('post_type', $variables['post_type'])
                ->where('post_status', 'publish');
        });
    }

    /**
     * Translate the ID attribute to lowercase
     *
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->attributes['ID'];
    }

    /**
     * Transform the post_title attribute
     *
     * @return mixed
     */
    public function getTitleAttribute()
    {
        return $this->attributes['post_title'];
    }

    /**
     * Transform the post_name attribute
     *
     * @return mixed
     */
    public function getSlugAttribute()
    {
        return $this->attributes['post_name'];
    }

    /**
     * Transform the post_content attribute
     *
     * @return mixed
     */
    public function getContentAttribute()
    {
        return apply_filters('the_content', $this->attributes['post_content']);
    }

    /**
     * Display the posts url
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return get_permalink($this->attributes['ID']);
    }

    /**
     * Transform the post_date_gmt attribute
     *
     * @return mixed
     */
    public function getCreatedAtAttribute()
    {
        return $this->attributes['post_date_gmt'];
    }

    /**
     * Transform the post_modified_gmt attribute
     *
     * @return mixed
     */
    public function getUpdatedAtAttribute()
    {
        return $this->attributes['post_modified_gmt'];
    }

    /**
     * Override the Model method to supply the Wordpress ID
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->primaryKey ? $this->primaryKey : 'ID';
    }

    /**
     * Override the Model method to only show the transformed attributes
     *
     * @return array
     */
    public function getVisible()
    {
        return array_merge($this->visible, $this->transformedAttributes);
    }

    /**
     * Override the Model method to automatically append our transformed attributes
     *
     * @return mixed
     */
    protected function getArrayableAppends()
    {
        $appends = array_merge($this->transformedAttributes, $this->appends);

        return $this->getArrayableItems(
            array_combine($appends, $appends)
        );
    }
}