<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2ResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2ResponseBody\result\authorizedUserList;
use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2ResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 4505A1E4-0EDD-4A02-A4D7-B49219328D49
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example SPECIFIC_USER_AUTHORIZATION
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @var authorizedUserList[]
     */
    public $authorizedUserList;

    /**
     * @var pagination
     */
    public $pagination;

    /**
     * @example MINI_APP_BROWSER_TRANSACTION
     *
     * @var string
     */
    public $QRCodeType;
    protected $_name = [
        'antChainId'         => 'AntChainId',
        'authorizationType'  => 'AuthorizationType',
        'authorizedUserList' => 'AuthorizedUserList',
        'pagination'         => 'Pagination',
        'QRCodeType'         => 'QRCodeType',
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
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->authorizedUserList) {
            $res['AuthorizedUserList'] = [];
            if (null !== $this->authorizedUserList && \is_array($this->authorizedUserList)) {
                $n = 0;
                foreach ($this->authorizedUserList as $item) {
                    $res['AuthorizedUserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }
        if (null !== $this->QRCodeType) {
            $res['QRCodeType'] = $this->QRCodeType;
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
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['AuthorizedUserList'])) {
            if (!empty($map['AuthorizedUserList'])) {
                $model->authorizedUserList = [];
                $n                         = 0;
                foreach ($map['AuthorizedUserList'] as $item) {
                    $model->authorizedUserList[$n++] = null !== $item ? authorizedUserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }
        if (isset($map['QRCodeType'])) {
            $model->QRCodeType = $map['QRCodeType'];
        }

        return $model;
    }
}
