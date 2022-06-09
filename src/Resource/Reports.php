<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Reports
 */
class Reports extends \Eventbrite\Model\ResourceBase
{
    /**
     * Retrieve a Sales Report
     *
     * @param string $event_ids
     *   Event ID.
     * @param string $filter_by
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\ReportResponseSales|\Eventbrite\Model\DataType\Error
     */
    public function getReportsSales(string $event_ids, string $filter_by, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\ReportResponseSales::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/reports/sales/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Retrieve a Attendee Report
     *
     * @param string $event_ids
     *   Event ID.
     * @param string $filter_by
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\ReportResponseAttendees|\Eventbrite\Model\DataType\Error
     */
    public function getReportsAttendees(string $event_ids, string $filter_by, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\ReportResponseAttendees::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/reports/attendees/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
