<?php declare(strict_types=1);

namespace Eventbrite\Service;

use \Eventbrite\Resource\Attendees;
use \Eventbrite\Resource\Categories;
use \Eventbrite\Resource\Discounts;
use \Eventbrite\Resource\DisplaySettings;
use \Eventbrite\Resource\EventCapacities;
use \Eventbrite\Resource\EventDescriptions;
use \Eventbrite\Resource\EventSchedules;
use \Eventbrite\Resource\EventSearches;
use \Eventbrite\Resource\EventSeries;
use \Eventbrite\Resource\EventTeams;
use \Eventbrite\Resource\Events;
use \Eventbrite\Resource\Formats;
use \Eventbrite\Resource\InventoryTiers;
use \Eventbrite\Resource\Media;
use \Eventbrite\Resource\Orders;
use \Eventbrite\Resource\OrganizationRoles;
use \Eventbrite\Resource\Organizations;
use \Eventbrite\Resource\OrganizationsMembers;
use \Eventbrite\Resource\Pricings;
use \Eventbrite\Resource\Questions;
use \Eventbrite\Resource\Reports;
use \Eventbrite\Resource\SeatMaps;
use \Eventbrite\Resource\StructuredContents;
use \Eventbrite\Resource\TextsOverrides;
use \Eventbrite\Resource\TicketBuyerSettings;
use \Eventbrite\Resource\TicketClasses;
use \Eventbrite\Resource\TicketGroups;
use \Eventbrite\Resource\Users;
use \Eventbrite\Resource\Venues;
use \Eventbrite\Resource\Webhooks;
/**
 * Eventbrite api service.
 */
class Api
{
    /**
     * Resource: attendees.
     *
     * @var Attendees
     */
    public Attendees $attendees;

    /**
     * Resource: categories.
     *
     * @var Categories
     */
    public Categories $categories;

    /**
     * Resource: discounts.
     *
     * @var Discounts
     */
    public Discounts $discounts;

    /**
     * Resource: displaySettings.
     *
     * @var DisplaySettings
     */
    public DisplaySettings $displaySettings;

    /**
     * Resource: eventCapacities.
     *
     * @var EventCapacities
     */
    public EventCapacities $eventCapacities;

    /**
     * Resource: eventDescriptions.
     *
     * @var EventDescriptions
     */
    public EventDescriptions $eventDescriptions;

    /**
     * Resource: eventSchedules.
     *
     * @var EventSchedules
     */
    public EventSchedules $eventSchedules;

    /**
     * Resource: eventSearches.
     *
     * @var EventSearches
     */
    public EventSearches $eventSearches;

    /**
     * Resource: eventSeries.
     *
     * @var EventSeries
     */
    public EventSeries $eventSeries;

    /**
     * Resource: eventTeams.
     *
     * @var EventTeams
     */
    public EventTeams $eventTeams;

    /**
     * Resource: events.
     *
     * @var Events
     */
    public Events $events;

    /**
     * Resource: formats.
     *
     * @var Formats
     */
    public Formats $formats;

    /**
     * Resource: inventoryTiers.
     *
     * @var InventoryTiers
     */
    public InventoryTiers $inventoryTiers;

    /**
     * Resource: media.
     *
     * @var Media
     */
    public Media $media;

    /**
     * Resource: orders.
     *
     * @var Orders
     */
    public Orders $orders;

    /**
     * Resource: organizationRoles.
     *
     * @var OrganizationRoles
     */
    public OrganizationRoles $organizationRoles;

    /**
     * Resource: organizations.
     *
     * @var Organizations
     */
    public Organizations $organizations;

    /**
     * Resource: organizationsMembers.
     *
     * @var OrganizationsMembers
     */
    public OrganizationsMembers $organizationsMembers;

    /**
     * Resource: pricings.
     *
     * @var Pricings
     */
    public Pricings $pricings;

    /**
     * Resource: questions.
     *
     * @var Questions
     */
    public Questions $questions;

    /**
     * Resource: reports.
     *
     * @var Reports
     */
    public Reports $reports;

    /**
     * Resource: seatMaps.
     *
     * @var SeatMaps
     */
    public SeatMaps $seatMaps;

    /**
     * Resource: structuredContents.
     *
     * @var StructuredContents
     */
    public StructuredContents $structuredContents;

    /**
     * Resource: textsOverrides.
     *
     * @var TextsOverrides
     */
    public TextsOverrides $textsOverrides;

    /**
     * Resource: ticketBuyerSettings.
     *
     * @var TicketBuyerSettings
     */
    public TicketBuyerSettings $ticketBuyerSettings;

    /**
     * Resource: ticketClasses.
     *
     * @var TicketClasses
     */
    public TicketClasses $ticketClasses;

    /**
     * Resource: ticketGroups.
     *
     * @var TicketGroups
     */
    public TicketGroups $ticketGroups;

    /**
     * Resource: users.
     *
     * @var Users
     */
    public Users $users;

    /**
     * Resource: venues.
     *
     * @var Venues
     */
    public Venues $venues;

    /**
     * Resource: webhooks.
     *
     * @var Webhooks
     */
    public Webhooks $webhooks;

    /**
     * Prepared client.
     *
     * @var \Eventbrite\Service\ApiClient
     */
    protected \Eventbrite\Service\ApiClient $client;

    /**
     * Main API class.
     *
     * @param string|null $host
     * @param string|null $auth_token
     * @param array $http_client_options
     */
    public function __construct(string $host = null, string $auth_token = null, array $http_client_options = []) {
        if ($host) {
            $this->setClient(new \Eventbrite\Service\ApiClient($host, $auth_token, $http_client_options));
        }
    }
    
    /**
     * Get guzzle client.
     *
     * @return \Eventbrite\Service\ApiClient
     *   Guzzle http client.
     */
    public function client() : \Eventbrite\Service\ApiClient {
        return $this->client;
    }
    
    /**
     * Set an ApiClient instance.
     *
     * @param \Eventbrite\Service\ApiClient $client
     *
     * @return $this
     */
    public function setClient(\Eventbrite\Service\ApiClient $client) {
        $this->client = $client;
        $this->loadEndpoints();
        return $this;
    }
    
    /**
     * Load the endpoint properties.
     */
    protected function loadEndpoints() {
        $this->attendees = new Attendees($this->client());
        $this->categories = new Categories($this->client());
        $this->discounts = new Discounts($this->client());
        $this->displaySettings = new DisplaySettings($this->client());
        $this->eventCapacities = new EventCapacities($this->client());
        $this->eventDescriptions = new EventDescriptions($this->client());
        $this->eventSchedules = new EventSchedules($this->client());
        $this->eventSearches = new EventSearches($this->client());
        $this->eventSeries = new EventSeries($this->client());
        $this->eventTeams = new EventTeams($this->client());
        $this->events = new Events($this->client());
        $this->formats = new Formats($this->client());
        $this->inventoryTiers = new InventoryTiers($this->client());
        $this->media = new Media($this->client());
        $this->orders = new Orders($this->client());
        $this->organizationRoles = new OrganizationRoles($this->client());
        $this->organizations = new Organizations($this->client());
        $this->organizationsMembers = new OrganizationsMembers($this->client());
        $this->pricings = new Pricings($this->client());
        $this->questions = new Questions($this->client());
        $this->reports = new Reports($this->client());
        $this->seatMaps = new SeatMaps($this->client());
        $this->structuredContents = new StructuredContents($this->client());
        $this->textsOverrides = new TextsOverrides($this->client());
        $this->ticketBuyerSettings = new TicketBuyerSettings($this->client());
        $this->ticketClasses = new TicketClasses($this->client());
        $this->ticketGroups = new TicketGroups($this->client());
        $this->users = new Users($this->client());
        $this->venues = new Venues($this->client());
        $this->webhooks = new Webhooks($this->client());
    }
    
}
