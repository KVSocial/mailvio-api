<?php

declare(strict_types=1);

namespace Mailvio\Api\Generated;

final class Operations
{
    /**
     * @var array<string, array<string, mixed>>
     */
    public const MAP =
        array (
          'createANewAccount' => 
          array (
            'operation_id' => 'createANewAccount',
            'doc_id' => 2,
            'title' => 'Create a new Account',
            'method' => 'POST',
            'path' => '/register',
            'requires_auth' => false,
            'source' => 'docs/API/002-create-a-new-account.md',
          ),
          'retrieveAccountmaster' => 
          array (
            'operation_id' => 'retrieveAccountmaster',
            'doc_id' => 4,
            'title' => 'Retrieve AccountMaster',
            'method' => 'GET',
            'path' => '/accountMaster',
            'requires_auth' => true,
            'source' => 'docs/API/004-retrieve-accountmaster.md',
          ),
          'getAccountmasterUsers' => 
          array (
            'operation_id' => 'getAccountmasterUsers',
            'doc_id' => 6,
            'title' => 'Get AccountMaster Users',
            'method' => 'GET',
            'path' => '/accountMaster/users',
            'requires_auth' => true,
            'source' => 'docs/API/006-get-accountmaster-users.md',
          ),
          'getAccountmasterUsage' => 
          array (
            'operation_id' => 'getAccountmasterUsage',
            'doc_id' => 7,
            'title' => 'Get AccountMaster Usage',
            'method' => 'POST',
            'path' => '/accountMaster/usage',
            'requires_auth' => true,
            'source' => 'docs/API/007-get-accountmaster-usage.md',
          ),
          'updateAccountuserRole' => 
          array (
            'operation_id' => 'updateAccountuserRole',
            'doc_id' => 8,
            'title' => 'Update AccountUser Role',
            'method' => 'PUT',
            'path' => '/accountMaster/:accountUserId',
            'requires_auth' => true,
            'source' => 'docs/API/008-update-accountuser-role.md',
          ),
          'updateAccountmaster' => 
          array (
            'operation_id' => 'updateAccountmaster',
            'doc_id' => 9,
            'title' => 'Update AccountMaster',
            'method' => 'PUT',
            'path' => '/accountMaster',
            'requires_auth' => true,
            'source' => 'docs/API/009-update-accountmaster.md',
          ),
          'deleteAccountuser' => 
          array (
            'operation_id' => 'deleteAccountuser',
            'doc_id' => 10,
            'title' => 'Delete AccountUser',
            'method' => 'DELETE',
            'path' => '/accountMaster/:accountUserId',
            'requires_auth' => true,
            'source' => 'docs/API/010-delete-accountuser.md',
          ),
          'createANewAccountuser' => 
          array (
            'operation_id' => 'createANewAccountuser',
            'doc_id' => 11,
            'title' => 'Create a new AccountUser',
            'method' => 'POST',
            'path' => '/accountMaster/register',
            'requires_auth' => true,
            'source' => 'docs/API/011-create-a-new-accountuser.md',
          ),
          'uploadAccountmasterAvatar' => 
          array (
            'operation_id' => 'uploadAccountmasterAvatar',
            'doc_id' => 12,
            'title' => 'Upload AccountMaster Avatar',
            'method' => 'POST',
            'path' => '/avatar',
            'requires_auth' => true,
            'source' => 'docs/API/012-upload-accountmaster-avatar.md',
          ),
          'loginToAnAccount' => 
          array (
            'operation_id' => 'loginToAnAccount',
            'doc_id' => 14,
            'title' => 'Login to an Account',
            'method' => 'POST',
            'path' => '/auth',
            'requires_auth' => false,
            'source' => 'docs/API/014-login-to-an-account.md',
          ),
          'retrieveAllGroups' => 
          array (
            'operation_id' => 'retrieveAllGroups',
            'doc_id' => 17,
            'title' => 'Retrieve all Groups',
            'method' => 'GET',
            'path' => '/group',
            'requires_auth' => true,
            'source' => 'docs/API/017-retrieve-all-groups.md',
          ),
          'getACountOfAllGroups' => 
          array (
            'operation_id' => 'getACountOfAllGroups',
            'doc_id' => 18,
            'title' => 'Get a count of all groups',
            'method' => 'GET',
            'path' => '/group/count',
            'requires_auth' => true,
            'source' => 'docs/API/018-get-a-count-of-all-groups.md',
          ),
          'getAGroup' => 
          array (
            'operation_id' => 'getAGroup',
            'doc_id' => 19,
            'title' => 'Get a Group',
            'method' => 'GET',
            'path' => '/group/:groupId',
            'requires_auth' => true,
            'source' => 'docs/API/019-get-a-group.md',
          ),
          'deleteAGroup' => 
          array (
            'operation_id' => 'deleteAGroup',
            'doc_id' => 20,
            'title' => 'Delete a Group',
            'method' => 'DELETE',
            'path' => '/group/:groupId',
            'requires_auth' => true,
            'source' => 'docs/API/020-delete-a-group.md',
          ),
          'createAGroup' => 
          array (
            'operation_id' => 'createAGroup',
            'doc_id' => 21,
            'title' => 'Create a Group',
            'method' => 'POST',
            'path' => '/group',
            'requires_auth' => true,
            'source' => 'docs/API/021-create-a-group.md',
          ),
          'updateAGroup' => 
          array (
            'operation_id' => 'updateAGroup',
            'doc_id' => 22,
            'title' => 'Update a Group',
            'method' => 'PUT',
            'path' => '/group/:groupId',
            'requires_auth' => true,
            'source' => 'docs/API/022-update-a-group.md',
          ),
          'addingASubscriber' => 
          array (
            'operation_id' => 'addingASubscriber',
            'doc_id' => 24,
            'title' => 'Adding a Subscriber',
            'method' => 'POST',
            'path' => '/group/:groupId/subscriber',
            'requires_auth' => true,
            'source' => 'docs/API/024-adding-a-subscriber.md',
          ),
          'getSubscribersForAGroup' => 
          array (
            'operation_id' => 'getSubscribersForAGroup',
            'doc_id' => 25,
            'title' => 'Get Subscribers for a Group',
            'method' => 'GET',
            'path' => '/group/:groupId/subscriber',
            'requires_auth' => true,
            'source' => 'docs/API/025-get-subscribers-for-a-group.md',
          ),
          'deleteASubscriberFromAGroup' => 
          array (
            'operation_id' => 'deleteASubscriberFromAGroup',
            'doc_id' => 26,
            'title' => 'Delete a Subscriber from a Group',
            'method' => 'DELETE',
            'path' => '/group/:groupId/subscriber',
            'requires_auth' => true,
            'source' => 'docs/API/026-delete-a-subscriber-from-a-group.md',
          ),
          'retrieveAllSubscriberData' => 
          array (
            'operation_id' => 'retrieveAllSubscriberData',
            'doc_id' => 27,
            'title' => 'Retrieve all Subscriber Data',
            'method' => 'GET',
            'path' => '/subscriber/:subscriberId/downloadAllData',
            'requires_auth' => true,
            'source' => 'docs/API/027-retrieve-all-subscriber-data.md',
          ),
          'changeStatusOfSubscriberS' => 
          array (
            'operation_id' => 'changeStatusOfSubscriberS',
            'doc_id' => 28,
            'title' => 'Change status of Subscriber(s)',
            'method' => 'POST',
            'path' => '/group/:groupId/subscriber/changeStatus',
            'requires_auth' => true,
            'source' => 'docs/API/028-change-status-of-subscriber-s.md',
          ),
          'getAllSubscribers' => 
          array (
            'operation_id' => 'getAllSubscribers',
            'doc_id' => 29,
            'title' => 'Get all Subscribers',
            'method' => 'GET',
            'path' => '/subscriber',
            'requires_auth' => true,
            'source' => 'docs/API/029-get-all-subscribers.md',
          ),
          'countAllSubscribers' => 
          array (
            'operation_id' => 'countAllSubscribers',
            'doc_id' => 30,
            'title' => 'Count all Subscribers',
            'method' => 'GET',
            'path' => '/subscriber/count',
            'requires_auth' => true,
            'source' => 'docs/API/030-count-all-subscribers.md',
          ),
          'getAnAccountuser' => 
          array (
            'operation_id' => 'getAnAccountuser',
            'doc_id' => 32,
            'title' => 'Get an AccountUser',
            'method' => 'GET',
            'path' => '/accountUser/:accountUserId',
            'requires_auth' => true,
            'source' => 'docs/API/032-get-an-accountuser.md',
          ),
          'createACustomField' => 
          array (
            'operation_id' => 'createACustomField',
            'doc_id' => 33,
            'title' => 'Create a Custom Field',
            'method' => 'POST',
            'path' => '/customField',
            'requires_auth' => true,
            'source' => 'docs/API/033-create-a-custom-field.md',
          ),
          'deleteACustomField' => 
          array (
            'operation_id' => 'deleteACustomField',
            'doc_id' => 34,
            'title' => 'Delete a Custom Field',
            'method' => 'DELETE',
            'path' => '/customfield/:customFieldId',
            'requires_auth' => true,
            'source' => 'docs/API/034-delete-a-custom-field.md',
          ),
          'uploadAnAccountuserAvatar' => 
          array (
            'operation_id' => 'uploadAnAccountuserAvatar',
            'doc_id' => 35,
            'title' => 'Upload an AccountUser Avatar',
            'method' => 'POST',
            'path' => '/accountUser/avatar',
            'requires_auth' => true,
            'source' => 'docs/API/035-upload-an-accountuser-avatar.md',
          ),
          'updateAnAccountuser' => 
          array (
            'operation_id' => 'updateAnAccountuser',
            'doc_id' => 36,
            'title' => 'Update an AccountUser',
            'method' => 'PUT',
            'path' => '/accountUser/:accountUserId',
            'requires_auth' => true,
            'source' => 'docs/API/036-update-an-accountuser.md',
          ),
          'getAllCustomFields' => 
          array (
            'operation_id' => 'getAllCustomFields',
            'doc_id' => 38,
            'title' => 'Get all Custom Fields',
            'method' => 'GET',
            'path' => '/customField',
            'requires_auth' => true,
            'source' => 'docs/API/038-get-all-custom-fields.md',
          ),
          'updateACustomField' => 
          array (
            'operation_id' => 'updateACustomField',
            'doc_id' => 39,
            'title' => 'Update a Custom Field',
            'method' => 'PUT',
            'path' => '/customField/:customFieldId',
            'requires_auth' => true,
            'source' => 'docs/API/039-update-a-custom-field.md',
          ),
          'getRecentCampaignStats' => 
          array (
            'operation_id' => 'getRecentCampaignStats',
            'doc_id' => 41,
            'title' => 'Get Recent Campaign Stats',
            'method' => 'GET',
            'path' => '/campaign/overview',
            'requires_auth' => true,
            'source' => 'docs/API/041-get-recent-campaign-stats.md',
          ),
          'retrieveACampaign' => 
          array (
            'operation_id' => 'retrieveACampaign',
            'doc_id' => 42,
            'title' => 'Retrieve a Campaign',
            'method' => 'GET',
            'path' => '/campaign/:campaignId',
            'requires_auth' => true,
            'source' => 'docs/API/042-retrieve-a-campaign.md',
          ),
          'getACampaignSubscriberCount' => 
          array (
            'operation_id' => 'getACampaignSubscriberCount',
            'doc_id' => 43,
            'title' => 'Get a campaign subscriber count',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/count',
            'requires_auth' => true,
            'source' => 'docs/API/043-get-a-campaign-subscriber-count.md',
          ),
          'checkSendingLimitBeforeSend' => 
          array (
            'operation_id' => 'checkSendingLimitBeforeSend',
            'doc_id' => 44,
            'title' => 'Check sending limit before send',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/checksendinglimit',
            'requires_auth' => true,
            'source' => 'docs/API/044-check-sending-limit-before-send.md',
          ),
          'exportCampaignStatistics' => 
          array (
            'operation_id' => 'exportCampaignStatistics',
            'doc_id' => 45,
            'title' => 'Export Campaign Statistics',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId/export',
            'requires_auth' => true,
            'source' => 'docs/API/045-export-campaign-statistics.md',
          ),
          'retrieveACampaignExport' => 
          array (
            'operation_id' => 'retrieveACampaignExport',
            'doc_id' => 46,
            'title' => 'Retrieve a Campaign Export',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/export/:exportId',
            'requires_auth' => true,
            'source' => 'docs/API/046-retrieve-a-campaign-export.md',
          ),
          'getAllCampaigns' => 
          array (
            'operation_id' => 'getAllCampaigns',
            'doc_id' => 47,
            'title' => 'Get all Campaigns',
            'method' => 'GET',
            'path' => '/campaign',
            'requires_auth' => true,
            'source' => 'docs/API/047-get-all-campaigns.md',
          ),
          'createACampaign' => 
          array (
            'operation_id' => 'createACampaign',
            'doc_id' => 48,
            'title' => 'Create a Campaign',
            'method' => 'POST',
            'path' => '/campaign',
            'requires_auth' => true,
            'source' => 'docs/API/048-create-a-campaign.md',
          ),
          'copyACampaign' => 
          array (
            'operation_id' => 'copyACampaign',
            'doc_id' => 49,
            'title' => 'Copy a Campaign',
            'method' => 'POST',
            'path' => '/campaign/copy',
            'requires_auth' => true,
            'source' => 'docs/API/049-copy-a-campaign.md',
          ),
          'updateACampaign' => 
          array (
            'operation_id' => 'updateACampaign',
            'doc_id' => 50,
            'title' => 'Update a Campaign',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId',
            'requires_auth' => true,
            'source' => 'docs/API/050-update-a-campaign.md',
          ),
          'startACampaign' => 
          array (
            'operation_id' => 'startACampaign',
            'doc_id' => 51,
            'title' => 'Start a Campaign',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId/start',
            'requires_auth' => true,
            'source' => 'docs/API/051-start-a-campaign.md',
          ),
          'pauseACampaign' => 
          array (
            'operation_id' => 'pauseACampaign',
            'doc_id' => 52,
            'title' => 'Pause a Campaign',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId/cancel',
            'requires_auth' => true,
            'source' => 'docs/API/052-pause-a-campaign.md',
          ),
          'pauseASendingCampaign' => 
          array (
            'operation_id' => 'pauseASendingCampaign',
            'doc_id' => 53,
            'title' => 'Pause a Sending Campaign',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId/pause',
            'requires_auth' => true,
            'source' => 'docs/API/053-pause-a-sending-campaign.md',
          ),
          'resumeAPausedCampaign' => 
          array (
            'operation_id' => 'resumeAPausedCampaign',
            'doc_id' => 54,
            'title' => 'Resume a Paused Campaign',
            'method' => 'PUT',
            'path' => '/campaign/:campaignId/resume',
            'requires_auth' => true,
            'source' => 'docs/API/054-resume-a-paused-campaign.md',
          ),
          'deleteACampaign' => 
          array (
            'operation_id' => 'deleteACampaign',
            'doc_id' => 55,
            'title' => 'Delete a Campaign',
            'method' => 'DELETE',
            'path' => '/campaign/:campaignId',
            'requires_auth' => true,
            'source' => 'docs/API/055-delete-a-campaign.md',
          ),
          'overviewStatistics' => 
          array (
            'operation_id' => 'overviewStatistics',
            'doc_id' => 57,
            'title' => 'Overview Statistics',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/stats',
            'requires_auth' => true,
            'source' => 'docs/API/057-overview-statistics.md',
          ),
          'getEmailsSent' => 
          array (
            'operation_id' => 'getEmailsSent',
            'doc_id' => 58,
            'title' => 'Get Emails Sent',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/stats/sent',
            'requires_auth' => true,
            'source' => 'docs/API/058-get-emails-sent.md',
          ),
          'getEmailsOpened' => 
          array (
            'operation_id' => 'getEmailsOpened',
            'doc_id' => 59,
            'title' => 'Get Emails Opened',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/stats/opened',
            'requires_auth' => true,
            'source' => 'docs/API/059-get-emails-opened.md',
          ),
          'getLinkClicksOverview' => 
          array (
            'operation_id' => 'getLinkClicksOverview',
            'doc_id' => 60,
            'title' => 'Get Link Clicks Overview',
            'method' => 'GET',
            'path' => '/campaign/:campaignId/stats/clicked',
            'requires_auth' => true,
            'source' => 'docs/API/060-get-link-clicks-overview.md',
          ),
          'retrieveAllApiKeys' => 
          array (
            'operation_id' => 'retrieveAllApiKeys',
            'doc_id' => 62,
            'title' => 'Retrieve all API Keys',
            'method' => 'GET',
            'path' => '/accountMaster/apikey',
            'requires_auth' => true,
            'source' => 'docs/API/062-retrieve-all-api-keys.md',
          ),
          'updateAnExistingApiKey' => 
          array (
            'operation_id' => 'updateAnExistingApiKey',
            'doc_id' => 63,
            'title' => 'Update an Existing Api Key',
            'method' => 'PUT',
            'path' => '/accountMaster/apikey/:apiKeyId',
            'requires_auth' => true,
            'source' => 'docs/API/063-update-an-existing-api-key.md',
          ),
          'createANewApikey' => 
          array (
            'operation_id' => 'createANewApikey',
            'doc_id' => 64,
            'title' => 'Create a new ApiKey',
            'method' => 'POST',
            'path' => '/accountMaster/apikey',
            'requires_auth' => true,
            'source' => 'docs/API/064-create-a-new-apikey.md',
          ),
          'deleteAnApiKey' => 
          array (
            'operation_id' => 'deleteAnApiKey',
            'doc_id' => 65,
            'title' => 'Delete an Api Key',
            'method' => 'DELETE',
            'path' => '/accountMaster/apikey/:apiKeyId',
            'requires_auth' => true,
            'source' => 'docs/API/065-delete-an-api-key.md',
          ),
          'registerANewWebhook' => 
          array (
            'operation_id' => 'registerANewWebhook',
            'doc_id' => 68,
            'title' => 'Register a new Webhook',
            'method' => 'POST',
            'path' => '/webhook',
            'requires_auth' => true,
            'source' => 'docs/API/068-register-a-new-webhook.md',
          ),
          'updateAnExistingWebhook' => 
          array (
            'operation_id' => 'updateAnExistingWebhook',
            'doc_id' => 69,
            'title' => 'Update an Existing Webhook',
            'method' => 'PUT',
            'path' => '/webhook/:webHookId',
            'requires_auth' => true,
            'source' => 'docs/API/069-update-an-existing-webhook.md',
          ),
          'deleteAWebhook' => 
          array (
            'operation_id' => 'deleteAWebhook',
            'doc_id' => 70,
            'title' => 'Delete a Webhook',
            'method' => 'DELETE',
            'path' => '/webhook/:webhookId',
            'requires_auth' => true,
            'source' => 'docs/API/070-delete-a-webhook.md',
          ),
          'retrieveAllWebhooks' => 
          array (
            'operation_id' => 'retrieveAllWebhooks',
            'doc_id' => 71,
            'title' => 'Retrieve All Webhooks',
            'method' => 'GET',
            'path' => '/webhook',
            'requires_auth' => true,
            'source' => 'docs/API/071-retrieve-all-webhooks.md',
          ),
          'retrieveAWebhook' => 
          array (
            'operation_id' => 'retrieveAWebhook',
            'doc_id' => 72,
            'title' => 'Retrieve a Webhook',
            'method' => 'GET',
            'path' => '/webhook/:webhookId',
            'requires_auth' => true,
            'source' => 'docs/API/072-retrieve-a-webhook.md',
          ),
          'retrieveASubscriber' => 
          array (
            'operation_id' => 'retrieveASubscriber',
            'doc_id' => 79,
            'title' => 'Retrieve a Subscriber',
            'method' => 'GET',
            'path' => '/subscriber/:subscriberId',
            'requires_auth' => true,
            'source' => 'docs/API/079-retrieve-a-subscriber.md',
          ),
          'transactionalEmails' => 
          array (
            'operation_id' => 'transactionalEmails',
            'doc_id' => 81,
            'title' => 'Transactional Emails',
            'method' => 'POST',
            'path' => '/transaction',
            'requires_auth' => true,
            'source' => 'docs/API/081-transactional-emails.md',
          ),
          'changeAccountMaster' => 
          array (
            'operation_id' => 'changeAccountMaster',
            'doc_id' => 82,
            'title' => 'Change Account Master',
            'method' => 'POST',
            'path' => '/accountMaster/change',
            'requires_auth' => true,
            'source' => 'docs/API/082-change-account-master.md',
          ),
          'getAllAccountMasters' => 
          array (
            'operation_id' => 'getAllAccountMasters',
            'doc_id' => 83,
            'title' => 'Get all Account Masters',
            'method' => 'GET',
            'path' => '/me/accounts',
            'requires_auth' => true,
            'source' => 'docs/API/083-get-all-account-masters.md',
          ),
          'copyMoveSubscriberSToAnotherGroup' => 
          array (
            'operation_id' => 'copyMoveSubscriberSToAnotherGroup',
            'doc_id' => 84,
            'title' => 'Copy / Move Subscriber(s) to another Group',
            'method' => 'POST',
            'path' => '/group/:groupid/subscriber/copy',
            'requires_auth' => true,
            'source' => 'docs/API/084-copy-move-subscriber-s-to-another-group.md',
          ),
          'retrieveAllSegments' => 
          array (
            'operation_id' => 'retrieveAllSegments',
            'doc_id' => 86,
            'title' => 'Retrieve all Segments',
            'method' => 'GET',
            'path' => '/segment',
            'requires_auth' => true,
            'source' => 'docs/API/086-retrieve-all-segments.md',
          ),
          'addASegment' => 
          array (
            'operation_id' => 'addASegment',
            'doc_id' => 87,
            'title' => 'Add a Segment',
            'method' => 'POST',
            'path' => '/segment',
            'requires_auth' => true,
            'source' => 'docs/API/087-add-a-segment.md',
          ),
          'deleteASegment' => 
          array (
            'operation_id' => 'deleteASegment',
            'doc_id' => 89,
            'title' => 'Delete a Segment',
            'method' => 'DELETE',
            'path' => '/segment/:segmentId',
            'requires_auth' => true,
            'source' => 'docs/API/089-delete-a-segment.md',
          ),
          'updateASegment' => 
          array (
            'operation_id' => 'updateASegment',
            'doc_id' => 90,
            'title' => 'Update a Segment',
            'method' => 'PUT',
            'path' => '/segment/:id',
            'requires_auth' => true,
            'source' => 'docs/API/090-update-a-segment.md',
          ),
          'bulkUpdateSubscriberStatuses' => 
          array (
            'operation_id' => 'bulkUpdateSubscriberStatuses',
            'doc_id' => 91,
            'title' => 'Bulk Update Subscriber Statuses',
            'method' => 'POST',
            'path' => '/subscriber/bulk/changeStatus',
            'requires_auth' => true,
            'source' => 'docs/API/091-bulk-update-subscriber-statuses.md',
          ),
          'bulkUpdateSingleSubscribers' => 
          array (
            'operation_id' => 'bulkUpdateSingleSubscribers',
            'doc_id' => 92,
            'title' => 'Bulk Update Single Subscribers',
            'method' => 'PUT',
            'path' => '/subscriber/bulk/:id',
            'requires_auth' => true,
            'source' => 'docs/API/092-bulk-update-single-subscribers.md',
          ),
          'bulkDeleteASubscriber' => 
          array (
            'operation_id' => 'bulkDeleteASubscriber',
            'doc_id' => 93,
            'title' => 'Bulk Delete a Subscriber',
            'method' => 'DELETE',
            'path' => '/subscriber/bulk/:id',
            'requires_auth' => true,
            'source' => 'docs/API/093-bulk-delete-a-subscriber.md',
          ),
          'bulkDeleteMultipleSubscribers' => 
          array (
            'operation_id' => 'bulkDeleteMultipleSubscribers',
            'doc_id' => 94,
            'title' => 'Bulk Delete multiple Subscribers',
            'method' => 'DELETE',
            'path' => '/subscriber/bulk',
            'requires_auth' => true,
            'source' => 'docs/API/094-bulk-delete-multiple-subscribers.md',
          ),
          'updatingASubscriber' => 
          array (
            'operation_id' => 'updatingASubscriber',
            'doc_id' => 95,
            'title' => 'Updating a Subscriber',
            'method' => 'PUT',
            'path' => '/subscriber/:id',
            'requires_auth' => true,
            'source' => 'docs/API/095-updating-a-subscriber.md',
          ),
          'addingATemplate' => 
          array (
            'operation_id' => 'addingATemplate',
            'doc_id' => 97,
            'title' => 'Adding a Template',
            'method' => 'POST',
            'path' => '/template',
            'requires_auth' => true,
            'source' => 'docs/API/097-adding-a-template.md',
          ),
          'retrieveSegmentResults' => 
          array (
            'operation_id' => 'retrieveSegmentResults',
            'doc_id' => 98,
            'title' => 'Retrieve Segment Results',
            'method' => 'GET',
            'path' => '/segment/:segmentId/results',
            'requires_auth' => true,
            'source' => 'docs/API/098-retrieve-segment-results.md',
          ),
          'previewSegmentResults' => 
          array (
            'operation_id' => 'previewSegmentResults',
            'doc_id' => 99,
            'title' => 'Preview Segment Results',
            'method' => 'POST',
            'path' => '/segment/quickQuery',
            'requires_auth' => true,
            'source' => 'docs/API/099-preview-segment-results.md',
          ),
          'retrievingSubscriberStatistics' => 
          array (
            'operation_id' => 'retrievingSubscriberStatistics',
            'doc_id' => 100,
            'title' => 'Retrieving Subscriber Statistics',
            'method' => 'GET',
            'path' => '/subscriber/:id/stats',
            'requires_auth' => true,
            'source' => 'docs/API/100-retrieving-subscriber-statistics.md',
          ),
          'bulkAddUpdateMultipleSubscribers' => 
          array (
            'operation_id' => 'bulkAddUpdateMultipleSubscribers',
            'doc_id' => 101,
            'title' => 'Bulk Add/Update Multiple Subscribers',
            'method' => 'PUT',
            'path' => '/subscriber/bulk',
            'requires_auth' => true,
            'source' => 'docs/API/101-bulk-add-update-multiple-subscribers.md',
          ),
          'addingASubscriberFromAnyForm' => 
          array (
            'operation_id' => 'addingASubscriberFromAnyForm',
            'doc_id' => 102,
            'title' => 'Adding a Subscriber from any Form',
            'method' => 'POST',
            'path' => '/api/addsubscriber',
            'requires_auth' => false,
            'source' => 'docs/API/102-adding-a-subscriber-from-any-form.md',
          ),
          'contentCheckATemplate' => 
          array (
            'operation_id' => 'contentCheckATemplate',
            'doc_id' => 103,
            'title' => 'Content check a Template',
            'method' => 'GET',
            'path' => '/template/spamTest/:templateId',
            'requires_auth' => true,
            'source' => 'docs/API/103-content-check-a-template.md',
          ),
          'creatingANewTest' => 
          array (
            'operation_id' => 'creatingANewTest',
            'doc_id' => 106,
            'title' => 'Creating a new Test',
            'method' => 'POST',
            'path' => '/spamTest/campaign/:campaignId',
            'requires_auth' => true,
            'source' => 'docs/API/106-creating-a-new-test.md',
          ),
          'retrievingInboxTestResults' => 
          array (
            'operation_id' => 'retrievingInboxTestResults',
            'doc_id' => 107,
            'title' => 'Retrieving Inbox Test Results',
            'method' => 'GET',
            'path' => '/spamTest/:inboxTestId',
            'requires_auth' => true,
            'source' => 'docs/API/107-retrieving-inbox-test-results.md',
          ),
          'retrieveCampaignJunkReports' => 
          array (
            'operation_id' => 'retrieveCampaignJunkReports',
            'doc_id' => 108,
            'title' => 'Retrieve Campaign Junk Reports',
            'method' => 'GET',
            'path' => '/campaign/:campaignid/stats/junk',
            'requires_auth' => true,
            'source' => 'docs/API/108-retrieve-campaign-junk-reports.md',
          ),
          'createACampaignReport' => 
          array (
            'operation_id' => 'createACampaignReport',
            'doc_id' => 110,
            'title' => 'Create a Campaign Report',
            'method' => 'POST',
            'path' => '/reports',
            'requires_auth' => true,
            'source' => 'docs/API/110-create-a-campaign-report.md',
          ),
          'retrieveACampaignReport' => 
          array (
            'operation_id' => 'retrieveACampaignReport',
            'doc_id' => 111,
            'title' => 'Retrieve a campaign report',
            'method' => 'GET',
            'path' => '/reports/:id',
            'requires_auth' => true,
            'source' => 'docs/API/111-retrieve-a-campaign-report.md',
          ),
          'retrievesACampaignReportFile' => 
          array (
            'operation_id' => 'retrievesACampaignReportFile',
            'doc_id' => 112,
            'title' => 'Retrieves a campaign report file',
            'method' => 'GET',
            'path' => '/reports/:id/file',
            'requires_auth' => true,
            'source' => 'docs/API/112-retrieves-a-campaign-report-file.md',
          ),
          'createATag' => 
          array (
            'operation_id' => 'createATag',
            'doc_id' => 114,
            'title' => 'Create a Tag',
            'method' => 'POST',
            'path' => '/tags',
            'requires_auth' => true,
            'source' => 'docs/API/114-create-a-tag.md',
          ),
          'retrieveTags' => 
          array (
            'operation_id' => 'retrieveTags',
            'doc_id' => 115,
            'title' => 'Retrieve Tags',
            'method' => 'GET',
            'path' => '/tags',
            'requires_auth' => true,
            'source' => 'docs/API/115-retrieve-tags.md',
          ),
          'updateATag' => 
          array (
            'operation_id' => 'updateATag',
            'doc_id' => 116,
            'title' => 'Update a Tag',
            'method' => 'PUT',
            'path' => '/tags/:tagId',
            'requires_auth' => true,
            'source' => 'docs/API/116-update-a-tag.md',
          ),
          'deleteATag' => 
          array (
            'operation_id' => 'deleteATag',
            'doc_id' => 117,
            'title' => 'Delete a Tag',
            'method' => 'DELETE',
            'path' => '/tags/:tagId',
            'requires_auth' => true,
            'source' => 'docs/API/117-delete-a-tag.md',
          ),
          'addRemoveTagsToASubscriber' => 
          array (
            'operation_id' => 'addRemoveTagsToASubscriber',
            'doc_id' => 118,
            'title' => 'Add/Remove Tags to a Subscriber',
            'method' => 'PUT',
            'path' => '/subscriber/:subscriberId/tags',
            'requires_auth' => true,
            'source' => 'docs/API/118-add-remove-tags-to-a-subscriber.md',
          ),
          'unsubscribeASubscriber' => 
          array (
            'operation_id' => 'unsubscribeASubscriber',
            'doc_id' => 119,
            'title' => 'Unsubscribe a Subscriber',
            'method' => 'PUT',
            'path' => '/subscriber/unsubscribe',
            'requires_auth' => true,
            'source' => 'docs/API/119-unsubscribe-a-subscriber.md',
          ),
          'updatingATemplate' => 
          array (
            'operation_id' => 'updatingATemplate',
            'doc_id' => 120,
            'title' => 'Updating a Template',
            'method' => 'PUT',
            'path' => '/template/:templateId',
            'requires_auth' => true,
            'source' => 'docs/API/120-updating-a-template.md',
          ),
          'sendSitetrackingDataFromTheBackend' => 
          array (
            'operation_id' => 'sendSitetrackingDataFromTheBackend',
            'doc_id' => 122,
            'title' => 'Send SiteTracking data from the backend',
            'method' => 'POST',
            'path' => '/accountmaster/tracker/transaction',
            'requires_auth' => true,
            'source' => 'docs/API/122-send-sitetracking-data-from-the-backend.md',
          ),
          'startASubscriberExport' => 
          array (
            'operation_id' => 'startASubscriberExport',
            'doc_id' => 123,
            'title' => 'Start a Subscriber Export',
            'method' => 'POST',
            'path' => '/export',
            'requires_auth' => true,
            'source' => 'docs/API/123-start-a-subscriber-export.md',
          ),
          'monitorASubscriberExport' => 
          array (
            'operation_id' => 'monitorASubscriberExport',
            'doc_id' => 124,
            'title' => 'Monitor a Subscriber Export',
            'method' => 'GET',
            'path' => '/export/:exportJobId',
            'requires_auth' => true,
            'source' => 'docs/API/124-monitor-a-subscriber-export.md',
          ),
          'retrieveAnExportJobFile' => 
          array (
            'operation_id' => 'retrieveAnExportJobFile',
            'doc_id' => 125,
            'title' => 'Retrieve an Export Job File',
            'method' => 'GET',
            'path' => '/export/:exportJobId/file',
            'requires_auth' => true,
            'source' => 'docs/API/125-retrieve-an-export-job-file.md',
          ),
        );

    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return self::MAP;
    }

    /**
     * @return array<string, mixed>
     */
    public static function get(string $operationId): array
    {
        if (!isset(self::MAP[$operationId])) {
            throw new \InvalidArgumentException(sprintf('Unknown operation %s.', $operationId));
        }

        return self::MAP[$operationId];
    }
}
