<?php

declare(strict_types=1);

namespace Mailvio\Api\Generated;

use Mailvio\Api\ApiResponse;

/**
 * @generated from docs/API/*.md
 */
trait OperationMethods
{
    /**
     * Create a new Account (Doc 2).
     *
     * @param array<string, mixed> $options
     */
    public function createANewAccount(array $options = []): ApiResponse
    {
        return $this->callOperation('createANewAccount', $options);
    }

    /**
     * Retrieve AccountMaster (Doc 4).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAccountmaster(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAccountmaster', $options);
    }

    /**
     * Get AccountMaster Users (Doc 6).
     *
     * @param array<string, mixed> $options
     */
    public function getAccountmasterUsers(array $options = []): ApiResponse
    {
        return $this->callOperation('getAccountmasterUsers', $options);
    }

    /**
     * Get AccountMaster Usage (Doc 7).
     *
     * @param array<string, mixed> $options
     */
    public function getAccountmasterUsage(array $options = []): ApiResponse
    {
        return $this->callOperation('getAccountmasterUsage', $options);
    }

    /**
     * Update AccountUser Role (Doc 8).
     *
     * @param array<string, mixed> $options
     */
    public function updateAccountuserRole(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAccountuserRole', $options);
    }

    /**
     * Update AccountMaster (Doc 9).
     *
     * @param array<string, mixed> $options
     */
    public function updateAccountmaster(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAccountmaster', $options);
    }

    /**
     * Delete AccountUser (Doc 10).
     *
     * @param array<string, mixed> $options
     */
    public function deleteAccountuser(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteAccountuser', $options);
    }

    /**
     * Create a new AccountUser (Doc 11).
     *
     * @param array<string, mixed> $options
     */
    public function createANewAccountuser(array $options = []): ApiResponse
    {
        return $this->callOperation('createANewAccountuser', $options);
    }

    /**
     * Upload AccountMaster Avatar (Doc 12).
     *
     * @param array<string, mixed> $options
     */
    public function uploadAccountmasterAvatar(array $options = []): ApiResponse
    {
        return $this->callOperation('uploadAccountmasterAvatar', $options);
    }

    /**
     * Login to an Account (Doc 14).
     *
     * @param array<string, mixed> $options
     */
    public function loginToAnAccount(array $options = []): ApiResponse
    {
        return $this->callOperation('loginToAnAccount', $options);
    }

    /**
     * Retrieve all Groups (Doc 17).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAllGroups(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAllGroups', $options);
    }

    /**
     * Get a count of all groups (Doc 18).
     *
     * @param array<string, mixed> $options
     */
    public function getACountOfAllGroups(array $options = []): ApiResponse
    {
        return $this->callOperation('getACountOfAllGroups', $options);
    }

    /**
     * Get a Group (Doc 19).
     *
     * @param array<string, mixed> $options
     */
    public function getAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('getAGroup', $options);
    }

    /**
     * Delete a Group (Doc 20).
     *
     * @param array<string, mixed> $options
     */
    public function deleteAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteAGroup', $options);
    }

    /**
     * Create a Group (Doc 21).
     *
     * @param array<string, mixed> $options
     */
    public function createAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('createAGroup', $options);
    }

    /**
     * Update a Group (Doc 22).
     *
     * @param array<string, mixed> $options
     */
    public function updateAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAGroup', $options);
    }

    /**
     * Adding a Subscriber (Doc 24).
     *
     * @param array<string, mixed> $options
     */
    public function addingASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('addingASubscriber', $options);
    }

    /**
     * Get Subscribers for a Group (Doc 25).
     *
     * @param array<string, mixed> $options
     */
    public function getSubscribersForAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('getSubscribersForAGroup', $options);
    }

    /**
     * Delete a Subscriber from a Group (Doc 26).
     *
     * @param array<string, mixed> $options
     */
    public function deleteASubscriberFromAGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteASubscriberFromAGroup', $options);
    }

    /**
     * Retrieve all Subscriber Data (Doc 27).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAllSubscriberData(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAllSubscriberData', $options);
    }

    /**
     * Change status of Subscriber(s) (Doc 28).
     *
     * @param array<string, mixed> $options
     */
    public function changeStatusOfSubscriberS(array $options = []): ApiResponse
    {
        return $this->callOperation('changeStatusOfSubscriberS', $options);
    }

    /**
     * Get all Subscribers (Doc 29).
     *
     * @param array<string, mixed> $options
     */
    public function getAllSubscribers(array $options = []): ApiResponse
    {
        return $this->callOperation('getAllSubscribers', $options);
    }

    /**
     * Count all Subscribers (Doc 30).
     *
     * @param array<string, mixed> $options
     */
    public function countAllSubscribers(array $options = []): ApiResponse
    {
        return $this->callOperation('countAllSubscribers', $options);
    }

    /**
     * Get an AccountUser (Doc 32).
     *
     * @param array<string, mixed> $options
     */
    public function getAnAccountuser(array $options = []): ApiResponse
    {
        return $this->callOperation('getAnAccountuser', $options);
    }

    /**
     * Create a Custom Field (Doc 33).
     *
     * @param array<string, mixed> $options
     */
    public function createACustomField(array $options = []): ApiResponse
    {
        return $this->callOperation('createACustomField', $options);
    }

    /**
     * Delete a Custom Field (Doc 34).
     *
     * @param array<string, mixed> $options
     */
    public function deleteACustomField(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteACustomField', $options);
    }

    /**
     * Upload an AccountUser Avatar (Doc 35).
     *
     * @param array<string, mixed> $options
     */
    public function uploadAnAccountuserAvatar(array $options = []): ApiResponse
    {
        return $this->callOperation('uploadAnAccountuserAvatar', $options);
    }

    /**
     * Update an AccountUser (Doc 36).
     *
     * @param array<string, mixed> $options
     */
    public function updateAnAccountuser(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAnAccountuser', $options);
    }

    /**
     * Get all Custom Fields (Doc 38).
     *
     * @param array<string, mixed> $options
     */
    public function getAllCustomFields(array $options = []): ApiResponse
    {
        return $this->callOperation('getAllCustomFields', $options);
    }

    /**
     * Update a Custom Field (Doc 39).
     *
     * @param array<string, mixed> $options
     */
    public function updateACustomField(array $options = []): ApiResponse
    {
        return $this->callOperation('updateACustomField', $options);
    }

    /**
     * Get Recent Campaign Stats (Doc 41).
     *
     * @param array<string, mixed> $options
     */
    public function getRecentCampaignStats(array $options = []): ApiResponse
    {
        return $this->callOperation('getRecentCampaignStats', $options);
    }

    /**
     * Retrieve a Campaign (Doc 42).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveACampaign', $options);
    }

    /**
     * Get a campaign subscriber count (Doc 43).
     *
     * @param array<string, mixed> $options
     */
    public function getACampaignSubscriberCount(array $options = []): ApiResponse
    {
        return $this->callOperation('getACampaignSubscriberCount', $options);
    }

    /**
     * Check sending limit before send (Doc 44).
     *
     * @param array<string, mixed> $options
     */
    public function checkSendingLimitBeforeSend(array $options = []): ApiResponse
    {
        return $this->callOperation('checkSendingLimitBeforeSend', $options);
    }

    /**
     * Export Campaign Statistics (Doc 45).
     *
     * @param array<string, mixed> $options
     */
    public function exportCampaignStatistics(array $options = []): ApiResponse
    {
        return $this->callOperation('exportCampaignStatistics', $options);
    }

    /**
     * Retrieve a Campaign Export (Doc 46).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveACampaignExport(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveACampaignExport', $options);
    }

    /**
     * Get all Campaigns (Doc 47).
     *
     * @param array<string, mixed> $options
     */
    public function getAllCampaigns(array $options = []): ApiResponse
    {
        return $this->callOperation('getAllCampaigns', $options);
    }

    /**
     * Create a Campaign (Doc 48).
     *
     * @param array<string, mixed> $options
     */
    public function createACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('createACampaign', $options);
    }

    /**
     * Copy a Campaign (Doc 49).
     *
     * @param array<string, mixed> $options
     */
    public function copyACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('copyACampaign', $options);
    }

    /**
     * Update a Campaign (Doc 50).
     *
     * @param array<string, mixed> $options
     */
    public function updateACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('updateACampaign', $options);
    }

    /**
     * Start a Campaign (Doc 51).
     *
     * @param array<string, mixed> $options
     */
    public function startACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('startACampaign', $options);
    }

    /**
     * Pause a Campaign (Doc 52).
     *
     * @param array<string, mixed> $options
     */
    public function pauseACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('pauseACampaign', $options);
    }

    /**
     * Pause a Sending Campaign (Doc 53).
     *
     * @param array<string, mixed> $options
     */
    public function pauseASendingCampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('pauseASendingCampaign', $options);
    }

    /**
     * Resume a Paused Campaign (Doc 54).
     *
     * @param array<string, mixed> $options
     */
    public function resumeAPausedCampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('resumeAPausedCampaign', $options);
    }

    /**
     * Delete a Campaign (Doc 55).
     *
     * @param array<string, mixed> $options
     */
    public function deleteACampaign(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteACampaign', $options);
    }

    /**
     * Overview Statistics (Doc 57).
     *
     * @param array<string, mixed> $options
     */
    public function overviewStatistics(array $options = []): ApiResponse
    {
        return $this->callOperation('overviewStatistics', $options);
    }

    /**
     * Get Emails Sent (Doc 58).
     *
     * @param array<string, mixed> $options
     */
    public function getEmailsSent(array $options = []): ApiResponse
    {
        return $this->callOperation('getEmailsSent', $options);
    }

    /**
     * Get Emails Opened (Doc 59).
     *
     * @param array<string, mixed> $options
     */
    public function getEmailsOpened(array $options = []): ApiResponse
    {
        return $this->callOperation('getEmailsOpened', $options);
    }

    /**
     * Get Link Clicks Overview (Doc 60).
     *
     * @param array<string, mixed> $options
     */
    public function getLinkClicksOverview(array $options = []): ApiResponse
    {
        return $this->callOperation('getLinkClicksOverview', $options);
    }

    /**
     * Retrieve all API Keys (Doc 62).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAllApiKeys(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAllApiKeys', $options);
    }

    /**
     * Update an Existing Api Key (Doc 63).
     *
     * @param array<string, mixed> $options
     */
    public function updateAnExistingApiKey(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAnExistingApiKey', $options);
    }

    /**
     * Create a new ApiKey (Doc 64).
     *
     * @param array<string, mixed> $options
     */
    public function createANewApikey(array $options = []): ApiResponse
    {
        return $this->callOperation('createANewApikey', $options);
    }

    /**
     * Delete an Api Key (Doc 65).
     *
     * @param array<string, mixed> $options
     */
    public function deleteAnApiKey(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteAnApiKey', $options);
    }

    /**
     * Register a new Webhook (Doc 68).
     *
     * @param array<string, mixed> $options
     */
    public function registerANewWebhook(array $options = []): ApiResponse
    {
        return $this->callOperation('registerANewWebhook', $options);
    }

    /**
     * Update an Existing Webhook (Doc 69).
     *
     * @param array<string, mixed> $options
     */
    public function updateAnExistingWebhook(array $options = []): ApiResponse
    {
        return $this->callOperation('updateAnExistingWebhook', $options);
    }

    /**
     * Delete a Webhook (Doc 70).
     *
     * @param array<string, mixed> $options
     */
    public function deleteAWebhook(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteAWebhook', $options);
    }

    /**
     * Retrieve All Webhooks (Doc 71).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAllWebhooks(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAllWebhooks', $options);
    }

    /**
     * Retrieve a Webhook (Doc 72).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAWebhook(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAWebhook', $options);
    }

    /**
     * Retrieve a Subscriber (Doc 79).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveASubscriber', $options);
    }

    /**
     * Transactional Emails (Doc 81).
     *
     * @param array<string, mixed> $options
     */
    public function transactionalEmails(array $options = []): ApiResponse
    {
        return $this->callOperation('transactionalEmails', $options);
    }

    /**
     * Change Account Master (Doc 82).
     *
     * @param array<string, mixed> $options
     */
    public function changeAccountMaster(array $options = []): ApiResponse
    {
        return $this->callOperation('changeAccountMaster', $options);
    }

    /**
     * Get all Account Masters (Doc 83).
     *
     * @param array<string, mixed> $options
     */
    public function getAllAccountMasters(array $options = []): ApiResponse
    {
        return $this->callOperation('getAllAccountMasters', $options);
    }

    /**
     * Copy / Move Subscriber(s) to another Group (Doc 84).
     *
     * @param array<string, mixed> $options
     */
    public function copyMoveSubscriberSToAnotherGroup(array $options = []): ApiResponse
    {
        return $this->callOperation('copyMoveSubscriberSToAnotherGroup', $options);
    }

    /**
     * Retrieve all Segments (Doc 86).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAllSegments(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAllSegments', $options);
    }

    /**
     * Add a Segment (Doc 87).
     *
     * @param array<string, mixed> $options
     */
    public function addASegment(array $options = []): ApiResponse
    {
        return $this->callOperation('addASegment', $options);
    }

    /**
     * Delete a Segment (Doc 89).
     *
     * @param array<string, mixed> $options
     */
    public function deleteASegment(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteASegment', $options);
    }

    /**
     * Update a Segment (Doc 90).
     *
     * @param array<string, mixed> $options
     */
    public function updateASegment(array $options = []): ApiResponse
    {
        return $this->callOperation('updateASegment', $options);
    }

    /**
     * Bulk Update Subscriber Statuses (Doc 91).
     *
     * @param array<string, mixed> $options
     */
    public function bulkUpdateSubscriberStatuses(array $options = []): ApiResponse
    {
        return $this->callOperation('bulkUpdateSubscriberStatuses', $options);
    }

    /**
     * Bulk Update Single Subscribers (Doc 92).
     *
     * @param array<string, mixed> $options
     */
    public function bulkUpdateSingleSubscribers(array $options = []): ApiResponse
    {
        return $this->callOperation('bulkUpdateSingleSubscribers', $options);
    }

    /**
     * Bulk Delete a Subscriber (Doc 93).
     *
     * @param array<string, mixed> $options
     */
    public function bulkDeleteASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('bulkDeleteASubscriber', $options);
    }

    /**
     * Bulk Delete multiple Subscribers (Doc 94).
     *
     * @param array<string, mixed> $options
     */
    public function bulkDeleteMultipleSubscribers(array $options = []): ApiResponse
    {
        return $this->callOperation('bulkDeleteMultipleSubscribers', $options);
    }

    /**
     * Updating a Subscriber (Doc 95).
     *
     * @param array<string, mixed> $options
     */
    public function updatingASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('updatingASubscriber', $options);
    }

    /**
     * Adding a Template (Doc 97).
     *
     * @param array<string, mixed> $options
     */
    public function addingATemplate(array $options = []): ApiResponse
    {
        return $this->callOperation('addingATemplate', $options);
    }

    /**
     * Retrieve Segment Results (Doc 98).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveSegmentResults(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveSegmentResults', $options);
    }

    /**
     * Preview Segment Results (Doc 99).
     *
     * @param array<string, mixed> $options
     */
    public function previewSegmentResults(array $options = []): ApiResponse
    {
        return $this->callOperation('previewSegmentResults', $options);
    }

    /**
     * Retrieving Subscriber Statistics (Doc 100).
     *
     * @param array<string, mixed> $options
     */
    public function retrievingSubscriberStatistics(array $options = []): ApiResponse
    {
        return $this->callOperation('retrievingSubscriberStatistics', $options);
    }

    /**
     * Bulk Add/Update Multiple Subscribers (Doc 101).
     *
     * @param array<string, mixed> $options
     */
    public function bulkAddUpdateMultipleSubscribers(array $options = []): ApiResponse
    {
        return $this->callOperation('bulkAddUpdateMultipleSubscribers', $options);
    }

    /**
     * Adding a Subscriber from any Form (Doc 102).
     *
     * @param array<string, mixed> $options
     */
    public function addingASubscriberFromAnyForm(array $options = []): ApiResponse
    {
        return $this->callOperation('addingASubscriberFromAnyForm', $options);
    }

    /**
     * Content check a Template (Doc 103).
     *
     * @param array<string, mixed> $options
     */
    public function contentCheckATemplate(array $options = []): ApiResponse
    {
        return $this->callOperation('contentCheckATemplate', $options);
    }

    /**
     * Creating a new Test (Doc 106).
     *
     * @param array<string, mixed> $options
     */
    public function creatingANewTest(array $options = []): ApiResponse
    {
        return $this->callOperation('creatingANewTest', $options);
    }

    /**
     * Retrieving Inbox Test Results (Doc 107).
     *
     * @param array<string, mixed> $options
     */
    public function retrievingInboxTestResults(array $options = []): ApiResponse
    {
        return $this->callOperation('retrievingInboxTestResults', $options);
    }

    /**
     * Retrieve Campaign Junk Reports (Doc 108).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveCampaignJunkReports(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveCampaignJunkReports', $options);
    }

    /**
     * Create a Campaign Report (Doc 110).
     *
     * @param array<string, mixed> $options
     */
    public function createACampaignReport(array $options = []): ApiResponse
    {
        return $this->callOperation('createACampaignReport', $options);
    }

    /**
     * Retrieve a campaign report (Doc 111).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveACampaignReport(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveACampaignReport', $options);
    }

    /**
     * Retrieves a campaign report file (Doc 112).
     *
     * @param array<string, mixed> $options
     */
    public function retrievesACampaignReportFile(array $options = []): ApiResponse
    {
        return $this->callOperation('retrievesACampaignReportFile', $options);
    }

    /**
     * Create a Tag (Doc 114).
     *
     * @param array<string, mixed> $options
     */
    public function createATag(array $options = []): ApiResponse
    {
        return $this->callOperation('createATag', $options);
    }

    /**
     * Retrieve Tags (Doc 115).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveTags(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveTags', $options);
    }

    /**
     * Update a Tag (Doc 116).
     *
     * @param array<string, mixed> $options
     */
    public function updateATag(array $options = []): ApiResponse
    {
        return $this->callOperation('updateATag', $options);
    }

    /**
     * Delete a Tag (Doc 117).
     *
     * @param array<string, mixed> $options
     */
    public function deleteATag(array $options = []): ApiResponse
    {
        return $this->callOperation('deleteATag', $options);
    }

    /**
     * Add/Remove Tags to a Subscriber (Doc 118).
     *
     * @param array<string, mixed> $options
     */
    public function addRemoveTagsToASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('addRemoveTagsToASubscriber', $options);
    }

    /**
     * Unsubscribe a Subscriber (Doc 119).
     *
     * @param array<string, mixed> $options
     */
    public function unsubscribeASubscriber(array $options = []): ApiResponse
    {
        return $this->callOperation('unsubscribeASubscriber', $options);
    }

    /**
     * Updating a Template (Doc 120).
     *
     * @param array<string, mixed> $options
     */
    public function updatingATemplate(array $options = []): ApiResponse
    {
        return $this->callOperation('updatingATemplate', $options);
    }

    /**
     * Send SiteTracking data from the backend (Doc 122).
     *
     * @param array<string, mixed> $options
     */
    public function sendSitetrackingDataFromTheBackend(array $options = []): ApiResponse
    {
        return $this->callOperation('sendSitetrackingDataFromTheBackend', $options);
    }

    /**
     * Start a Subscriber Export (Doc 123).
     *
     * @param array<string, mixed> $options
     */
    public function startASubscriberExport(array $options = []): ApiResponse
    {
        return $this->callOperation('startASubscriberExport', $options);
    }

    /**
     * Monitor a Subscriber Export (Doc 124).
     *
     * @param array<string, mixed> $options
     */
    public function monitorASubscriberExport(array $options = []): ApiResponse
    {
        return $this->callOperation('monitorASubscriberExport', $options);
    }

    /**
     * Retrieve an Export Job File (Doc 125).
     *
     * @param array<string, mixed> $options
     */
    public function retrieveAnExportJobFile(array $options = []): ApiResponse
    {
        return $this->callOperation('retrieveAnExportJobFile', $options);
    }

}
