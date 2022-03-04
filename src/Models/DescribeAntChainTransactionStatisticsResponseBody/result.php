<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var int
     */
    public $creatTime;

    /**
     * @var string
     */
    public $dt;

    /**
     * @var int
     */
    public $lastSumBlockHeight;

    /**
     * @var int
     */
    public $transCount;
    protected $_name = [
        'antChainId'         => 'AntChainId',
        'creatTime'          => 'CreatTime',
        'dt'                 => 'Dt',
        'lastSumBlockHeight' => 'LastSumBlockHeight',
        'transCount'         => 'TransCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->creatTime) {
            $res['CreatTime'] = $this->creatTime;
        }
        if (null !== $this->dt) {
            $res['Dt'] = $this->dt;
        }
        if (null !== $this->lastSumBlockHeight) {
            $res['LastSumBlockHeight'] = $this->lastSumBlockHeight;
        }
        if (null !== $this->transCount) {
            $res['TransCount'] = $this->transCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['CreatTime'])) {
            $model->creatTime = $map['CreatTime'];
        }
        if (isset($map['Dt'])) {
            $model->dt = $map['Dt'];
        }
        if (isset($map['LastSumBlockHeight'])) {
            $model->lastSumBlockHeight = $map['LastSumBlockHeight'];
        }
        if (isset($map['TransCount'])) {
            $model->transCount = $map['TransCount'];
        }

        return $model;
    }
}
