<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

/**
 * Class Attachments
 * @package App\Models
 *
 * @property integer $id
 * @property string $name
 * @property string $original_name
 * @property string $mime
 * @property string $extension
 * @property integer $size
 * @property integer $sort
 * @property string $path
 * @property string $description
 * @property string $alt
 * @property string $hash
 * @property string $disk
 * @property integer $user_id
 * @property string $group
 */
class Attachment extends Model
{
    use HasFactory;

    /**
     * Get attachment full path
     *
     * @return string
     */
    public function fullPath(): string
    {
        return '/storage/app/public/' . $this->path . $this->name . '.' . $this->extension;
    }

    /**
     * Get attachment info
     *
     * @param bool $shortInfo
     * @return array
     */
    public function getInfo(bool $shortInfo = false): array
    {
        $fullPath = $this->fullPath();
        $absolutePath = $_SERVER['DOCUMENT_ROOT'].$fullPath;

        if(file_exists($absolutePath)) {
            [$width, $height] = getimagesize($absolutePath);
        }

        $result = [
            'id' => $this->id,
            'width' => $width ?? false,
            'height' => $height ?? false,
            'path' => $fullPath,
        ];

        if(!$shortInfo) {
            $result = array_merge($result, [
                'name' => $this->name,
                'original_name' => $this->original_name,
                'extension' => $this->extension,
                'description' => $this->description,
                'alt' => $this->alt,
                'size' => $this->size,
                'user_id' => $this->user_id,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]);
        }

        return $result;
    }

    protected $table = 'attachments';

    protected $fillable = [
        'id',
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'sort',
        'path',
        'description',
        'alt',
        'hash',
        'disk',
        'user_id',
        'group',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $allowedFilters = [
        'id',
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'sort',
        'path',
        'description',
        'alt',
        'hash',
        'disk',
        'user_id',
        'group',
        'created_at',
        'updated_at',
    ];

    protected $allowedSorts = [
        'id',
        'name',
        'original_name',
        'mime',
        'extension',
        'size',
        'sort',
        'path',
        'description',
        'alt',
        'hash',
        'disk',
        'user_id',
        'group',
        'created_at',
        'updated_at',
    ];
}
