<?php

	namespace Patreonomy\Resource;

	final class Benefit extends \Patreonomy\Resource\AbstractResource {
		/**
		 * Default field flags set
		 * @var array
		 */
		const ALL_FIELD_FLAGS = [ "app_external_id", "app_meta", "benefit_type", "created_at", "deliverables_due_today_count", "delivered_deliverables_count", "description", "is_deleted", "is_ended", "is_published", "next_deliverable_due_date", "not_delivered_deliverables_count", "rule_type", "tiers_count", "title" ];
		
		/**
		 * The third-party external ID this reward is associated with, if any. Can be null.
		 * @var string
		 */
		public NULL|string $app_external_id = "";
		
		/**
		 * Any metadata the third-party app included with this benefit on creation. Can be null.
		 * @var array
		 */
		public NULL|array $app_meta = [];
		
		/**
		 * Type of benefit, such as custom for creator-defined benefits. Can be null.
		 * @var string
		 */
		public NULL|string $benefit_type = "";
		
		/**
		 * (UTC ISO format)	Datetime this benefit was created.
		 * @var string
		 */
		public NULL|string $created_at = "";
		
		/**
		 * Number of deliverables for this benefit that are due today specifically.
		 * @var int
		 */
		public NULL|int $deliverables_due_today_count = 0;
		
		/**
		 * Number of deliverables for this benefit that have been marked complete.
		 * @var int
		 */
		public NULL|int $delivered_deliverables_count = 0;
		
		/**
		 * Benefit display description. Can be null.
		 * @var string
		 */
		public NULL|string $description = "";
		
		/**
		 * true if this benefit has been deleted.
		 * @var bool
		 */
		public NULL|bool $is_deleted = false;
		
		/**
		 * true if this benefit is no longer available to new patrons
		 * @var bool
		 */
		public NULL|bool $is_ended = false;
		
		/**
		 * true if this benefit is ready to be fulfilled to patrons.
		 * @var bool
		 */
		public NULL|bool $is_published = false;
		
		/**
		 * (UTC ISO format)	The next due date (after EOD today) for this benefit. Can be null.
		 * @var string
		 */
		public NULL|string $next_deliverable_due_date = "";
		
		/**
		 * Number of deliverables for this benefit that are due, for all dates.
		 * @var int
		 */
		public NULL|int $not_delivered_deliverables_count = 0;
		
		/**
		 * A rule type designation, such as eom_monthly or one_time_immediate. Can be null.
		 * @var string
		 */
		public NULL|string $rule_type = "";
		
		/**
		 * Number of tiers containing this benefit.
		 * @var int
		 */
		public NULL|int $tiers_count = 0;
		
		/**
		 * Benefit display title.
		 * @var string
		 */
		public NULL|string $title = "";
		
		/**
		 * The Campaign the benefit belongs to
		 * @var \Patreonomy\Resource\Campaign
		 */
		public NULL|\Patreonomy\Resource\Campaign $campaign = NULL;
		
		/**
		 * (Alpha) The campaign-app connection
		 * @var \Patreonomy\Resource\CampaignInstallation
		 */
		public NULL|\Patreonomy\Resource\CampaignInstallation $campaign_installation = NULL;
		
		/**
		 * The Deliverables that have been generated by the Benefit
		 * @var array
		 */
		public NULL|array $deliverables = [];
		
		/**
		 * The Tiers the benefit has been added to.
		 * @var array
		 */
		public NULL|array $tiers = [];
	}