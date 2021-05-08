<?php

namespace Laravolt\Workflow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravolt\Suitable\AutoSort;

class ProcessDefinition extends Model
{
    use AutoSort;

    protected $table = 'wf_process_definitions';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [];

    /**
     * @throws \Throwable
     */
    public static function importFromCamunda(array $definitions)
    {
        \DB::transaction(
            function () use ($definitions) {
                foreach ($definitions as $definition) {
                    self::create(
                        [
                            'id' => $definition->id,
                            'name' => $definition->name,
                            'key' => $definition->key,
                            'version' => $definition->version,
                        ]
                    );
                }
            }
        );
    }
}
