<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PutPipelineTriggerRequest extends Model
{
    /**
     * @var PipelineTrigger
     */
    public $body;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'body'  => 'body',
        'force' => 'force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutPipelineTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = PipelineTrigger::fromMap($map['body']);
        }
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
