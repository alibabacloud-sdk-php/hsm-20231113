<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetJobResponseBody;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $completed;

    /**
     * @example OperationTimeout
     *
     * @var string
     */
    public $error;

    /**
     * @example job-202401250936hze747fd7e0007005
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 95
     *
     * @var int
     */
    public $progress;

    /**
     * @example success
     *
     * @var string
     */
    public $response;

    /**
     * @example fail
     *
     * @var string
     */
    public $status;

    /**
     * @example create
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'completed' => 'Completed',
        'error'     => 'Error',
        'jobId'     => 'JobId',
        'progress'  => 'Progress',
        'response'  => 'Response',
        'status'    => 'Status',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
