<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class Project extends Model
{
    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example test-description
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $generation;

    /**
     * @example Project
     *
     * @var string
     */
    public $kind;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @description This parameter is required.
     *
     * @example my-project
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceVersion;

    /**
     * @var ProjectSpec
     */
    public $spec;

    /**
     * @var ProjectStatus
     */
    public $status;

    /**
     * @example 1455541096***548
     *
     * @var string
     */
    public $uid;

    /**
     * @example 2021-11-19T09:34:38Z
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'     => 'createdTime',
        'description'     => 'description',
        'generation'      => 'generation',
        'kind'            => 'kind',
        'labels'          => 'labels',
        'name'            => 'name',
        'resourceVersion' => 'resourceVersion',
        'spec'            => 'spec',
        'status'          => 'status',
        'uid'             => 'uid',
        'updatedTime'     => 'updatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resourceVersion) {
            $res['resourceVersion'] = $this->resourceVersion;
        }
        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['resourceVersion'])) {
            $model->resourceVersion = $map['resourceVersion'];
        }
        if (isset($map['spec'])) {
            $model->spec = ProjectSpec::fromMap($map['spec']);
        }
        if (isset($map['status'])) {
            $model->status = ProjectStatus::fromMap($map['status']);
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }

        return $model;
    }
}
