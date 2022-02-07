<?php

namespace App\Console\Commands\Point;

use App\Libraries\SendMsg\SendMsg;
use App\Repositories\User\Interfaces\UserRepoInterface;
use App\Traits\RepoTrait;

class Issue1
{
    use RepoTrait;

    private $userRepo;

    public function __construct(UserRepoInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /*
     * 푸시전송여부(true or false)
     */
    public function shouldSendPush(): bool
    {
        return false;
    }

    /*
     * 푸시전송정보(타이틀, 메세지, 딥링크)
     */
    public function getPushInfo(): array
    {
        return [];
    }

    /*
     * 알림톡전송여부(true or false)
     */
    public function shouldSendBizTalk(): bool
    {
        return true;
    }

    /*
     * 알림톡전송대상
     * template_code 는 notification_template 에 정의되어 있는 데이터 사용
     * template_data 는 message 에 치환될 값들을 정의
     */
    public function getBizTalkInfo($customerId): array
    {
        return [];
    }

    /*
     * 포인트지급대상(회원고유번호, 지급액, 타이틀, 유효기간, 전화번호(선택))
     */
    public function getPackages(): array
    {
        return [
            ['customer_id' => 1, 'recv_amt' => 100, 'title' => 'TEST POINT', 'validity_value' => 1, 'phone' => '01000000000'],
        ];
    }
}
