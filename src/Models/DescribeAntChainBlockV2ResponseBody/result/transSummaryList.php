<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainBlockV2ResponseBody\result;

use AlibabaCloud\Tea\Model;

class transSummaryList extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $blockHash;

    /**
     * @var int
     */
    public $category;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $gasUsed;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $transTypeV10;

    /**
     * @var string
     */
    public $transTypeV6;
    protected $_name = [
        'alias'          => 'Alias',
        'blockHash'      => 'BlockHash',
        'category'       => 'Category',
        'createTime'     => 'CreateTime',
        'from'           => 'From',
        'gasUsed'        => 'GasUsed',
        'hash'           => 'Hash',
        'height'         => 'Height',
        'referenceCount' => 'ReferenceCount',
        'to'             => 'To',
        'transTypeV10'   => 'TransTypeV10',
        'transTypeV6'    => 'TransTypeV6',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->blockHash) {
            $res['BlockHash'] = $this->blockHash;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->gasUsed) {
            $res['GasUsed'] = $this->gasUsed;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->transTypeV10) {
            $res['TransTypeV10'] = $this->transTypeV10;
        }
        if (null !== $this->transTypeV6) {
            $res['TransTypeV6'] = $this->transTypeV6;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BlockHash'])) {
            $model->blockHash = $map['BlockHash'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GasUsed'])) {
            $model->gasUsed = $map['GasUsed'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['TransTypeV10'])) {
            $model->transTypeV10 = $map['TransTypeV10'];
        }
        if (isset($map['TransTypeV6'])) {
            $model->transTypeV6 = $map['TransTypeV6'];
        }

        return $model;
    }
}
