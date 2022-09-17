<?php

namespace NFMailchimp\EmailCRM\Mailchimp\ApiRequests;

use NFMailchimp\EmailCRM\Mailchimp\MailchimpApi;

use NFMailchimp\EmailCRM\Mailchimp\Contracts\GetInterestsFromApi;
use NFMailchimp\EmailCRM\Mailchimp\Entities\Interests;

/**
 * Gets a collection of interests from remote API
 */
class GetInterests implements GetInterestsFromApi
{

	/** @var MailchimpApi */
	protected $mailchimpApi;

	/**
	 * List Id
	 * @var string
	 */
	protected $listId;

	/**
	 * @param MailchimpApi $mailchimpApi API client library
	 */
	public function __construct(MailchimpApi $mailchimpApi)
	{
		$this->mailchimpApi = $mailchimpApi;
	}

	/** @inheritdoc */
	public function requestInterests(string $listId, string $interestCategoryId): Interests
	{
		try {
			$r = $this->mailchimpApi->getInterests($listId, $interestCategoryId, ['count' => 500]);
			$interests = Interests::fromArray((array) $r->interests);
			$interests->setListId($listId);
			return $interests;
		} catch (\Exception $e) {
			error_log(self::class . '::' . __FUNCTION__).' - ' . $e->getMessage();
			return new Interests();
		}
	}
}
