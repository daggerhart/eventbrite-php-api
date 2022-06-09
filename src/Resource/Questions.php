<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Questions
 */
class Questions extends \Eventbrite\Model\ResourceBase
{
    /**
     * List Default Questions by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param string $include_all
     *   Return the whole list of canned included or not
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\PaginationCollection
     */
    public function getEventCannedQuestions(string $event_id, string $include_all, array $query = array()) : \Eventbrite\Model\PaginationCollection {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\PaginationCollection::class;
        $response = $this->request('GET', "/events/{$event_id}/canned_questions/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'questions', '\\Eventbrite\\Model\\DataType\\CannedQuestion']);
    }
    
    /**
     * Get Default Question by Id
     *
     * @param string $event_id
     *   Event ID.
     * @param string $question_id
     *   Canned Question ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function getEventCannedQuestion(string $event_id, string $question_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/event/{$event_id}/canned_questions/{$question_id}", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
    * Create a Default Question for an Event
    *
    * @param string $event_id
    *   Event ID.
    * @param \Eventbrite\Model\DataType\CannedQuestionCreate $question
    * @param string $headers
    *   Authorization: Bearer PERSONAL_OAUTH_TOKEN
    Content-Type: application/json
    * @param array $query
    *   Additional request parameters.
    *
    * @return \Eventbrite\Model\DataType\CannedQuestion|\Eventbrite\Model\DataType\Error
    */
    public function createEventCannedQuestions(string $event_id, ?\Eventbrite\Model\DataType\CannedQuestionCreate $question = null, ?string $headers = null, array $query = array()) {
        $query['question'] = $question;
        $query['headers'] = $headers;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\CannedQuestion::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/events/{$event_id}/canned_questions/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Update Default Question by Id
     *
     * @param string $event_id
     *   Event ID.
     * @param string $question_id
     *   Canned Question ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function updateEventCannedQuestion(string $event_id, string $question_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\ModelBase::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/event/{$event_id}/canned_questions/{$question_id}", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Delete Default Question by Id
     *
     * @param string $event_id
     *   Event ID.
     * @param string $question_id
     *   Canned Question ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function deleteEventCannedQuestion(string $event_id, string $question_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('DELETE', "/event/{$event_id}/canned_questions/{$question_id}", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Custom Questions by Event
     *
     * @param string $event_id
     *   Event ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\BaseQuestion|\Eventbrite\Model\ModelBase
     */
    public function getEventQuestions(string $event_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\BaseQuestion::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/events/{$event_id}/questions/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'questions', '\\Eventbrite\\Model\\DataType\\BaseQuestion']);
    }
    
    /**
    * Create a Custom question for an Event
    *
    * @param string $event_id
    *   Event ID.
    * @param \Eventbrite\Model\DataType\BaseQuestionCreate $question
    * @param string $headers
    *   Authorization: Bearer PERSONAL_OAUTH_TOKEN
    Content-Type: application/json  
    * @param array $query
    *   Additional request parameters.
    *
    * @return \Eventbrite\Model\DataType\BaseQuestion|\Eventbrite\Model\DataType\Error|\Eventbrite\Model\ModelBase
    */
    public function createEventQuestions(string $event_id, ?\Eventbrite\Model\DataType\BaseQuestionCreate $question = null, ?string $headers = null, array $query = array()) {
        $query['question'] = $question;
        $query['headers'] = $headers;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\BaseQuestion::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response_types[403] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('POST', "/events/{$event_id}/questions/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Get Custom Question by Id
     *
     * @param string $event_id
     *   Event ID.
     * @param string $question_id
     *   Custom Question ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\BaseQuestion|\Eventbrite\Model\ModelBase
     */
    public function getEventQuestion(string $event_id, string $question_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\BaseQuestion::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('GET', "/events/{$event_id}/questions/{$question_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * Delete a Custom Question for an Event
     *
     * @param string $event_id
     *   Event ID.
     * @param string $question_id
     *   Custom Question ID.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase
     */
    public function deleteEventQuestion(string $event_id, string $question_id, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[404] = \Eventbrite\Model\ModelBase::class;
        $response_types[403] = \Eventbrite\Model\ModelBase::class;
        $response = $this->request('DELETE', "/events/{$event_id}/questions/{$question_id}/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
}
