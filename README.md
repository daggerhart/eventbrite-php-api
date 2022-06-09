# Eventbrite API v3

## Metadata

| Name | Description |
|------|-------------|
| **FORMAT** | `1A` |
| **HOST** | `https://www.eventbriteapi.com/v3/` |

## Details

## About our API

| New to APIs? Check out [Intro to APIs](https://www.eventbrite.com/platform/docs/introduction) first to get up to speed. |
| :---------------- | :---------------------------------- | :------------------------------------------------------------------------------------------------ |

The Eventbrite API:

* Is [REST](https://developer.mozilla.org/en-US/docs/Glossary/REST)-based (though we use POST instead of PUT).

* Uses OAuth2 for authorization.

* Always returns responses in [JSON](https://json.org/).

All URLs referenced in the API documentation have the following base: https://www.eventbriteapi.com/v3.

For the examples in this guide, we'll be using the [python-requests](https://github.com/kennethreitz/requests) library.

## Authentication

1. [Get a Private Token](#get-a-private-token)

2. [(For App Partners) Authorize your Users](#authorize-your-users)

3. [Authenticate API Requests](#authenticate-api-requests)

<a name="get-a-private-token"></a>

### 1. Get a Private Token

a. Log in to your Eventbrite account and visit [your API Keys page](https://www.eventbrite.com/platform/api-keys).

b. Copy your private token.

<a name="authorize-your-users"></a>

### 2. (For App Partners) Authorize your Users

Note: These steps enable you to perform API requests on behalf of other users. To perform API requests on your own behalf, skip to [Authenticate API Requests](#authenticate-api-requests).

#### Authorize Users

What You'll Need:

* API Key

* Client Secret

* Redirect URI

Note: To find this information, visit [your API Key Management page](https://www.eventbrite.com/account-settings/apps).

The Eventbrite API uses [OAuth 2.0](https://oauth.net/2/) for authorization.

There are two ways to authorize users: Server-side and client-side. We strongly recommend handling authorization on the server side for security reasons.

* Server-Side Authorization (Recommended)

    a. Redirect users to our authorization URL, while including your API key and redirect URI as query parameters:
    `https://www.eventbrite.com/oauth/authorize?response_type=code&client_id=YOUR_API_KEY&redirect_uri=YOUR_REDIRECT_URI`

    When the user authorizes your app, your redirect URI will receive a request from our authorization server with your access code included as a query parameter.

    Here's an example of the URI you will be redirected to (with the access code included as a query parameter):
    `http://localhost:8080/oauth/redirect?code=YOUR_ACCESS_CODE`

    b. Send a POST request to `https://www.eventbrite.com/oauth/token` that specifies the grant type and includes your access code, client secret, and API key. This data should be sent as part of your request header.

    Here's an example of a POST request using cURL:

    ```
    curl --request POST \
    --url 'https://www.eventbrite.com/oauth/token' \
    --header 'content-type: application/x-www-form-urlencoded' \
    --data grant_type=authorization_code \
    --data 'client_id=API_KEY \
    --data client_secret=CLIENT_SECRET \
    --data code=ACCESS_CODE \
    --data 'redirect_uri=REDIRECT_URI'
    ```

    The server will verify the access code and call your redirect URI. The user's private token will be available in the JSON response. Use this private token to make API requests on behalf of this user.

* Client-Side Authorization

    a. Redirect users to our authorization URL, while including your API key and redirect URI as query parameters:
    `https://www.eventbrite.com/oauth/authorize?response_type=token&client_id=YOUR_API_KEY&redirect_uri=YOUR_REDIRECT_URI`

    When the user authorizes your app, your redirect URI will receive a request with the private token included as a query parameter.

Next up: Follow the steps in [Authenticate API Requests](#authenticate-api-requests).

<a name="authenticate-api-requests"></a>

### 3. Authenticate API Requests

To authenticate API requests, you'll need to include either your private token or your user's private token.

There are two ways of including your token in an API request:

* Authorization Header

    Include the following in your Authorization header (replacing MYTOKEN with your token):

    { Authorization: Bearer MYTOKEN }

* Query Parameter Authentication

    Include the following at the end of the URL (replacing MYTOKEN with your token):

    /v3/users/me/?token=MYTOKEN

For every user you would like to perform API requests on behalf of, repeat [(For App Partners) Authorize your Users](#authorize-your-users) and [Authenticate API Requests](#authenticate-api-requests).
<a name="best-practices"></a>

### Best practices

These best practices ensure that your authentication and access to the Eventbrite API is successful and secure.

#### Do not use your private token directly in client-side code.

Before you make your application publicly available, ensure that your client-side code does not contain private tokens or any other private information.

#### Delete unneeded API keys

To minimize your exposure to attack, delete any private tokens that you no longer need.

## Errors

When an error occurs during an API request, you will receive:

* An HTTP error status (in the 400-500 range)

* A JSON response containing more information about the error

A typical error response looks like this:

<pre><code>
{
    "error": "VENUE_AND_ONLINE",
    "error_description": "You cannot both specify a venue and set online_event",
    "status_code": 400
}
</code></pre>

See below for descriptions of what each line means:

| Example                                                                      | Description                                                                                                                                                                                                                                       |
| :--------------------------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| {                                                                            |                                                                                                                                                                                                                                                   |
| "error": "VENUE_AND_ONLINE",                                                 | “VENUE_AND_ONLINE” is an example of a constant string value for the error. This constant value is what you should base your error handling logic on, because this string won’t change depending on the locale or as the API changes over time.    |
| "error_description": "You cannot both specify a venue and set online_event", | "You cannot both specify a venue and set online_event" is an example of an error description value. This string usually contains a description of the error, and should only be displayed to developers, not your users.                          |
| "status_code": 400                                                           | 400 is an example of a status code value. This value mirrors the HTTP status code you will receive. It’s included for convenience, in case your HTTP client makes it difficult to get status codes, or has one error handler for all error codes. |
|  }                                                                           |                                                                                                                                                                                                                                                   |

### Common Errors

You can find a listing of the individual errors for each endpoint on their endpoint entries, but there are also some common errors that all endpoints might return:

| Status Code | Text                    | Description                                                                                                                                                          |
| :---------- | :---------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 301         | PERMANENTLY_MOVED       | Resource must be retrieved from a different URL.                                                                                                                     |
| 400         | ACTION_NOT_PROCESSED    | Requested operation not processed.                                                                                                                                   |
| 400         | ARGUMENTS_ERROR         | There are errors with your arguments.                                                                                                                                |
| 400         | BAD_CONTINUATION_TOKEN  | Invalid continuation token passed.                                                                                                                                   |
| 400         | BAD_PAGE                | Page number does not exist or is an invalid format (e.g. negative).                                                                                                  |
| 400         | BAD_REQUEST             | The resource you’re creating already exists.                                                                                                                         |
| 400         | INVALID_ARGUMENT        | Invalid argument value passed.                                                                                                                                       |
| 400         | INVALID_AUTH            | Authentication/OAuth token is invalid.                                                                                                                               |
| 400         | INVALID_AUTH_HEADER     | Authentication header is invalid.                                                                                                                                    |
| 400         | INVALID_BATCH           | Batched request is missing or invalid.                                                                                                                               |
| 400         | INVALID_BODY            | A request body that was not in JSON format was passed.                                                                                                               |
| 400         | UNSUPPORTED_OPERATION   | Requested operation not supported.                                                                                                                                   |
| 401         | ACCESS_DENIED           | Authentication unsuccessful.                                                                                                                                         |
| 401         | NO_AUTH                 | Authentication not provided.                                                                                                                                         |
| 403         | NOT_AUTHORIZED          | User has not been authorized to perform that action.                                                                                                                 |
| 404         | NOT_FOUND               | Invalid URL.                                                                                                                                                         |
| 405         | METHOD_NOT_ALLOWED      | Method is not allowed for this endpoint.                                                                                                                             |
| 409         | REQUEST_CONFLICT        | Requested operation resulted in conflict.                                                                                                                            |
| 429         | HIT_RATE_LIMIT          | Hourly rate limit has been reached for this token. Default rate limits are 2,000 calls per hour.                                                                     |
| 500         | EXPANSION_FAILED        | Unhandled error occurred during expansion; the request is likely to succeed if you don’t ask for expansions, but <a href="https://www.eventbrite.com/platform/docs/contact" target="_blank">contact Eventbrite support</a> if this problem persists. |
| 500         | INTERNAL_ERROR          | Unhandled error occurred in Eventbrite. <a href="https://www.eventbrite.com/platform/docs/contact" target="_blank">contact Eventbrite support</a> if this problem persists.                                                                          |

## Paginated Responses

### What's in a paginated response?

An Eventbrite paginated response is made up of two main sections: A pagination header and a list of objects.

Here's an example of a paginated response:

```
{
  "pagination": {
    "object_count": 4,
    "continuation": "AEtFRyiWxkr0ZXyCJcnZ5U1-uSWXJ6vO0sxN06GbrDngaX5U5i8XYmEuZfmZZYB9Uq6bSizOLYoV",
    "page_count": 2,
    "page_size": 2,
    "has_more_items": true,
    "page_number": 1
  },
  "categories": [
    {
      "slug": "email",
      "name_localized": "Email",
      "name": "Email",
      "id": "7"
    },
    {
      "slug": "website",
      "name_localized": "Website",
      "name": "Website",
      "id": "5"
    },
  ]
}
```

Here are descriptions of what each attribute within a pagination header means:

| Attribute         | Example                             | Description                                                                                       |
| :---------------- | :---------------------------------- | :------------------------------------------------------------------------------------------------ |
| `object_count`    | `4`                                 | The total number of objects found in your response, across all pages.                             |
| `continuation`    | `AEtFRyiWxkr0Z`<br>`XyCJcnZ5U1-uS`<br>`WXJ6vO0sxN06G`<br>`brDngaX5U5i8X`<br>`YmEuZfmZZYB`<br>`9Uq6bSizOLYoV`        | The continuation token you'll use to get to the next set of results by making the same request again but including this token. Your results will always include a new continuation token that you can use to jump to the next page. When all records have been retrieved, the continuation token will return an empty list of objects. |
| `page_count`      | `2`                                 | The total number of pages found in your response.                                                 |
| `page_size`       | `2`                                 | The maximum number of objects that can be returned per page for this API endpoint.                |
| `has_more_items`  | `true`                              | Boolean indicating whether or not there are more items in your response. In this example, the object is “true”, so there are more items. When all records have been retrieved, this attribute will be “false”.                                                                         |
| `page_number`     | `1`                                 | The page number you are currently viewing (always starts at 1).                                   |

### Using a continuation token

Here's how to use a continuation token to jump to the next page of results:

1. Make a call to any listing endpoint that retrieves a paginated response. <br> <br> 
Your format will vary, but it might look something like this: GET https://www.eventbriteapi.com/v3/categories/.

2. Verify that the “has_more_items” attribute is “true” before continuing. If it is “false”, there are no additional pages to retrieve, so you can stop here.

3. Copy the continuation token from your response.

4. Call the endpoint again, after adding a continuation token as a query string parameter to the URI. <br> <br> Your call format will vary, but it might look something like this: https://www.eventbriteapi.com/v3/categories/?**continuation=AEtFRyiWxkr0ZXyCJcnZ5U1-uSWXJ6vO0sxN06GbrDngaX5U5i8XYmEuZfmZZYB9Uq6bSizOLYoV**

5. Repeat until all desired records have been retrieved.

## Expansions

Eventbrite has many models that refer to each other, and often you’ll want to fetch related data along with the primary
model you’re querying—for example, you may want to fetch an organizer along with each event you get back. The way of 
doing this in the Eventbrite API is called "expansions": you can specify a set of relationships to additionally fetch 
with every call, which reduces the number of API requests you must make to obtain your data.

When using expansions, note that each expansion you specify will slow down your API request slightly, so try to use as
few expansions as possible to ensure faster response times.

The available expansions are based on the type of object that the API is returning; each of the return formats lists
available expansions, as you can see in the event and attendee documentation, for example.

### Requesting Expansions

The Eventbrite API is currently undergoing an upgrade to its expansions system, so the ways you request an expansion 
varies based on the API endpoint. The two sections below describe the two different request formats, but important is
determining which request format an API endpoint supports.

If an endpoint's top-level response object contains an attribute named `_type`, that endpoint has been upgraded to
Expansions v2 and also supports Expansions v1 for backwards compatibility. If the top-level response object does not
contain an attribute named `_type`, it has not yet been upgraded and supports <em>only</em> Expansions v1 at this time.

At some point in the future, after all endpoints have been upgraded to Expansions v2, Expansions v1 will be deprecated
and then later removed. Eventbrite will communicate this deprecation period and removal date when the upgrade is
complete and that decision has been made.

#### Expansions v1

If you are already an API user, this is the expansions system with which you are likely already familiar. To request
an expansion, pass a comma-separated list of expansion names as the `expand=` querystring argument in your URL.

<em>For example, to fetch all my own events with organizers and venues expanded:</em>

`/v3/users/me/owned_events/?expand=organizer,venue`

Sometimes you might want to expand the attributes of an object that has itself been returned by an expansion.

<em>For example, you may have a list of orders and want to retrieve the event for each of those orders and the venue
for each of those events:</em>

`/v3/users/me/orders/?expand=event.venue`

Expansions can be nested in this way <b>up to four levels deep</b>.

#### Expansions v2 (Recommended if Available)

This new version of expansions is similar, but keys off the `_type` attributes in the response. A response contains
either a top-level object or a list of top-level objects. In that object or those objects, attribute values might be
other objects or lists of objects. All objects that support expansions will contain a `_type` attribute, and within a
list of objects, the value of `_type` will be the same for all objects. When requesting an expansion, you pass a series
of `expand.[value of _type]=` querystring arguments in the URL, with the value of each argument being the list of
requested expansions for that object type.

Given a normal, non-expanded response like this:

<pre><code>{
    "_type": "event",
    "name": "My Cool Event",
    "organizer_id": "1234",
    "venue_id": "5678",
    ...
}
</code></pre>

You could expand the organizer and venue with the following argument:

`?expand.event=organizer,venue`

Which would result in the following change to the response:

<pre><code>{
    "_type": "event",
    "name": "My Cool Event",
    "organizer_id": "1234",
    "organizer": {
        "id": "1234",
        ...
    },
    "venue_id": "5678",
    "venue": {
        "id": "5678",
        ...
    },
    ...
}
</code></pre>

Expansions v2 normally makes no distinction between top-level and nested expansions. Expansions belong to object types,
not response levels, so you can achieve "nested" expansions by specifying expansions for all the object types you
expect to receive and want to expand at any level. For example, given a normal, non-expanded response like this:

<pre><code>{
    "_type": "order",
    "event_id": "9012",
    ...
}
</code></pre>

You can expand not only the order's event, but also the event's organizer and venue, with these arguments:

`?expand.order=event&expand.event=organizer,venue`

And receive a new response like this:

<pre><code>{
    "_type": "order",
    "event_id": "9012",
    "event": {
        "_type": "event",
        "name": "My Cool Event",
        "organizer_id": "1234",
        "organizer": {
            "id": "1234",
            ...
        },
        "venue_id": "5678",
        "venue": {
            "id": "5678",
            ...
        },
        ...
    },
    ...
}
</code></pre>

However, this will expand all order events and all event organizers and venues, at any level, which may not be what you
wish to achieve. If you know you want an item expanded only at a certain level, you can instead use nested expansions.
These arguments are equivalent to the previous example:

`?expand.order=event,event.organizer,event.venue`

All of these examples are just that—examples. The exact format of a response, and its available expansions, will depend
entirely on which API endpoint you are calling.

## API Switches

### What do switches do?

Switches allow for the dynamic modification of Eventbrite API endpoint behaviors. They can be used to enable new or experimental features, change response formats, and other behaviors. In general, switches are used to ease the process of phasing in new API features that would otherwise break clients. Clients may activate or deactivate switchable features by setting switch headers on API requests.

### Switch lifecycle

A feature and its switch go through three phases:

- Opt-in, in which a new switch will be available to turn on the new feature.

- Opt-out, in which the feature will be on by default and the switch will be available to turn it off.

- Fully integrated, at which time the switch will be deprecated.

> Eventbrite will notify all API consumers before any switchable feature is introduced or enters a new phase.

### Public and protected switches

Switches may be exposed only to certain clients, at Eventbrite’s discretion. Such switches will be restricted to a set of whitelisted API keys, and any client attempting to set a protected switch using a non-whitelisted API key will get a permission error.

Switches that are not protected are available to be used by any client.

### Using switches

#### Making a request using switch headers

Clients use request headers to set switches on API requests. A switch header may contain any number of switch names, separated by commas. Switch names consist of letters, numbers and underscores, and are case-insensitive.

To use the example of a switch called “EVENT_FORMAT_OCT_2016” that activates a new Event serialization format:

<pre><code>GET /v3/events/12345/ Eb-Api-Switches-Enabled: EVENT_FORMAT_OCT_2016
This call will return the event with ID 12345 using the new format.</code></pre>

If the same switch were opt-out, and the client needed to make a request using the old Event format, it would deactivate the switch like so:

<pre><code>GET /v3/events/12345/ Eb-Api-Switches-Disabled: EVENT_FORMAT_OCT_2016
This call would return the event using the old format.</code></pre>

### Errors

A request containing switch headers may return the following error codes:

**409 REQUEST_CONFLICT:** Conflicting switches were passed. This happens if the client passes the same switch in both the Enabled and Disabled headers.
**403 NOT_AUTHORIZED:** The client sent a header for a switch that it is not allowed to set.
**400 BAD_REQUEST:** The client sent a header for a switch that does not exist or has been deprecated.

## Basic Types

### Integer

`10`

A standard JSON integer.

### Boolean

`true`

A standard JSON boolean.

### String

`"Ihre Aal ist r\u00fcckw\u00e4rts"`

A standard JSON string.

(When POSTing data as `application/x-www-form-urlencoded`, use a UTF-8
encoded string instead rather than unicode escapes)

### Float

`72.19381730`

A standard JSON floating-point decimal.

### Decimal

`"72.19381730"`

An arbitrary-precision decimal number encoded as a standard JSON string. Decimals are used in cases where
floating-point arithmetic inaccuracies could arise with standard JSON floating-point decimals.

### Date Types

There are four types of date formats:

* Date

* Datetime

* Local Datetime

* Datetime with Timezone

#### Date

`"2010-01-31"`

Date represents a date as a string in ISO8601 date format. If you wish to represent a time as well, you'll need to use Datetime, Local Datetime, or Datetime with Timezone.

#### Datetime

`"2010-01-31T13:00:00Z"`

Datetime represents a date and time as a string in ISO8601 combined date and time format in UTC (Coordinated Universal Time).

#### Local Datetime

`"2010-01-31T13:00:00"`

Local Datetime represents a date and time as a string in Naive Local ISO8601 date and time format in the timezone of the event.

#### Datetime with Timezone

This value is only used for fields where the timezone itself is important information (for example, event start times).

<pre><code>{
    "timezone": "America/Los_Angeles",
    "utc": "2018-05-12T02:00:00Z",
    "local": "2018-05-11T19:00:00"
}
</code></pre>

| Value                                  | Type       | Description                                   |
| :------------------------------------- | :--------  | :-------------------------------------------- |
| `"timezone": "America/Los_Angeles"`    | `string`   | A timezone value from the Olson specification |
| `"utc": "2018-05-12T02:00:00Z"`        | `datetime` | A datetime value in the UTC timezone          |
| `"local": "2018-05-11T19:00:00`        | `datetime` | A datetime value in the named timezone        |

When being sent as a request:

* `utc` and `timezone` are required

* `local` is ignored

### List

<pre><code>[1, 2, 3, 4]
"1,2,3,4"
</code></pre>

A list of literal values. With a content-type of `application/json`, it
should be a JSON array of literals, otherwise, for
`application/x-www-form-urlencoded` it should be a string than is a comma
separated list of values.

### Object List

<pre><code>[{"name1": "val1", "name2": "val2"}, {...}]
"[{\"name1\": \"val1\", \"name2\": \"val2\"}, {...}]"
</code></pre>

A JSON list of object values. With a content-type of `application/json`, it
should be a JSON array, otherwise, for `application/x-www-form-urlencoded`
it should be a string encoding of a JSON array.

### Dictionary

<pre><code>{"key1": "value1", "key2": {"objectkey": "value"}, "key3": [list_values], {...}}
"{\"key2\": {\"key3\": \"value\"}, \"key1\": \"value\", \"key4\": [\"value\", \"value\"]}"
</code></pre>

A JSON object representation of a dictionary. With a content-type of
`application/json`, it should be a JSON object, otherwise, for
`application/x-www-form-urlencoded` it should be a string encoding
of a JSON object.

### Multipart Text

<pre><code>{
    "text": "Event Name",
    "html": "<b>Event</b> Name",
}
</code></pre>

Returned for fields which represent HTML, like event names
and descriptions.

The `html` key represents the original HTML (which _should_
be sanitized and free from injected script tags etc., but as always, be careful
what you put in your DOM), while the `text` key is a stripped version useful
for places where you can't or don't need to display the full HTML version.

### Country Code

`"AR"`

The ISO 3166 alpha-2 code of a country.

### Currency Code

`"USD"`

An ISO 4217 3-character code of a currency

### Currency

<pre><code>{
    "currency": "USD",
    "value": 432,
    "major_value": "4.32",
    "display": "4.32 USD"
}
</code></pre>

When submitting as form-encoded POST data, you can instead provide a string
indicating the currency and the value separated by a comma, e.g. `USD,432` -
however, when you submit a JSON POST body, you must submit this as a JSON
object with the `currency` and `value` fields.

Returned for monetary values, such as ticket prices, fees charged and
tax amounts.

Currencies are represented as their currency code and an integer value,
where the code is the currency code as defined by
`ISO 4217 <http://en.wikipedia.org/wiki/ISO_4217>`\_ and the integer value
is the number of units of the minor unit of the currency (e.g. cents for
US dollars).

You can get a value in the currency's major unit - for example, dollars
or pound sterling - by taking the integer value provided and shifting the
decimal point left by the exponent value for that currency as defined in
`ISO 4217 <http://en.wikipedia.org/wiki/ISO_4217>`\_.

For example, the exponent for USD (the US dollar) is 2, so a value of
`2311` becomes `$23.11`. For JPY (the Japanese yen) it's 0, so
a value of `2311` becomes `¥2311`.

Eventbrite does not currently sell tickets in non-decimal currencies,
such as the Malagasy ariary (MGA), but any value for them would also be
returned in minor units (for example, `("MGA", 7)` would mean 1.2 MGA,
or 1 ariary and 2 francs).

The `display` value is provided for your convenience; its formatting
may change depending on the locale you query the API with (for example,
commas for decimal separators in European locales).

### Address

<pre><code>{
    "address_1": "333 O'Farrell St",
    "address_2": "Suite 400",
    "city": "San Francisco",
    "region": "CA",
    "postal_code": "94102",
    "country": "US",
    "latitude": "37.7576792",
    "longitude": "-122.5078119",
    "localized_address_display": "333 O'Farrell St Suite 400, San Francisco, CA 94102",
    "localized_area_display": "San Francisco, CA",
    "localized_multi_line_address_display": ["333 O'Farrell St", "Suite 400", "San Francisco, CA 94102"]
}
</code></pre>

Though address formatting varies considerably between different countries and
regions, Eventbrite still has a common address return format to keep things
consistent.

In general, you should treat `address_1`, `address_2`, `city`, and
`region` as opaque lines of the address printed in that order. The
`postal_code` field contains the local postal or zip code equivalent, if
available, and the `country` field contains the `ISO 3166 <http://en.wikipedia.org/wiki/ISO_3166-1>`\_
country code for the country (with the name of the country broken out
for your convenience).

All fields apart from `address_1` and `country` are optional.

#### Address Fields

| Field                                  | Type      | Description                                                                                                                 |
| :------------------------------------- | :-------- | --------------------------------------------------------------------------------------------------------------------------- |
| `address_1`                            | `string`  | The street/location address (part 1)                                                                                        |
| `address_2`                            | `string`  | The street/location address (part 2)                                                                                        |
| `city`                                 | `string`  | The city                                                                                                                    |
| `region`                               | `string`  | The ISO 3166-2 2- or 3-character region code for the state, province, region, or district                                   |
| `postal_code`                          | `string`  | The postal code                                                                                                             |
| `country`                              | `string`  | The ISO 3166-1 2-character international code for the country                                                               |
| `latitude`                             | `decimal` | The latitude portion of the address coordinates                                                                             |
| `longitude`                            | `decimal` | The longitude portion of the address coordinates                                                                            |
| `localized_address_display`            | `string`  | The format of the address display localized to the address country                                                          |
| `localized_area_display`               | `string`  | The format of the address's area display localized to the address country                                                   |
| `localized_multi_line_address_display` | `list`    | The multi-line format order of the address display localized to the address country, where each line is an item in the list |

### Object

<pre><code>{
    "resource_uri": "https://www.eventbriteapi.com/v3/events/3564383166/",
    "id": "3564383166",
}
</code></pre>

The standard base representation for first-class objects in Eventbrite, such
as :format:`event`, :format:`venue` and :format:`order`.

The `resource_uri` is an absolute URL to the API endpoint that will return
you the canonical representation of the event, and the `id` is a
:format:`string` that represents a unique identifer for the event (note
that it is not necessarily numeric).

Other fields on objects are defined on their individual pages, but note that
fields may not be present if their value is `null`; we have noted fields
that may not contain a value with `(optional)`.

## Eventual Consistency

The Eventbrite Platform is large and, as such, contains a great amount of data. In order to provide the fastest
experience practicable to its users, the Platform employs a model known as
[eventual consistency](https://en.wikipedia.org/wiki/Eventual_consistency). In short, new or updated data may not be
available instantly after you submit changes.

### Implications of Eventual Consistency

There are many implications associated with the use of eventual consistency—some of them positive, some of them
unfortunate. The key positive to eventual consistency is that it makes the Platform faster and generally provides a
better, more reliable, and more available experience for users and partners alike. The notable downside is that when
you or someone else creates a new event, modifies an existing event, updates the profile for a venue, or otherwise
modifies data on the Platform, those changes may not be immediately visible.

When you submit a `POST` or `DELETE` request to alter data, the response you receive, if successful, will always contain
the most-up-to-date data, reflecting your changes immediately. However, if you then instantly submit a `GET` request to
obtain that same data, you may get a `404 Not Found` response (if it's new data you created), or the response may
contain stale data (if it's existing data you updated). The time between when you submit your changes and when those
changes are visible across the Platform can vary from as little as 1 second to as much as 5 minutes, depending on the
data and the current amount of traffic the Platform is handling. In almost all circumstances, that time is less than
15 seconds.

### Use Waypoints for Immediate Consistency

There are times where eventual consistency makes it difficult to use the API for rapidly making changes. For example,
creating an event, adding ticket classes to that event, and updating images for that event, all with a set of API calls
that occur over the series of several seconds. Eventbrite Waypoints allow Platform developers to request immediate
consistency during such activities.

A Waypoint is a sort of bookmark to tell the Platform when in the data timeline you expect your data to be found. When
you submit a `POST` or `DELETE` request to alter data, the response you receive, if successful, will contain an
HTTP header named `Eventbrite-API-Waypoint-Token`. The value of this header is the Waypoint for the data you just
created or altered. It is encrypted, but its contents are not important. On the very next response, include a request
header named `Eventbrite-API-Waypoint-Token` with the exact, unaltered value copied from the previous response header.
You should do this even if your next request is a `GET` or another `POST` or `DELETE`. In this way, its use is very
similar to a browser cookie.

Continue to do this for subsequent responses and requests. Each time you receive a response containing the header
`Eventbrite-API-Waypoint-Token`, submit your next request with the header value from that most-recent response. This
will avoid errors commonly associated with eventual consistency, such as `404 Not Found`. There is a downside, however:
submitting these tokens in your requests will slow down the requests by as much as 5 extra seconds on top of the
normal request time for a given endpoint (though usually less than 1 second).

You do not have to hold on to Waypoint tokens indefinitely, and you do not even have to use Waypoint tokens. Once about
5 minutes has passed since your last request, you can discard any Waypoint token you received in that response, and
submit your next request with no Waypoint token header. Also, if eventual consistency does not pose any concerns to
your workflow, you can safely ignore Waypoint tokens entirely.
