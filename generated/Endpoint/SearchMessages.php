<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Endpoint;

class SearchMessages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Searches for messages matching a query.
     *
     * @param array $queryParameters {
     *
     *     @var string $sort_dir change sort direction to ascending (`asc`) or descending (`desc`)
     *     @var string $query search query
     *     @var string $sort return matches sorted by either `score` or `timestamp`
     *     @var string $count Pass the number of results you want per "page". Maximum of `100`.
     *     @var string $token Authentication token. Requires scope: `search:read`
     *     @var bool $highlight pass a value of `true` to enable query highlight markers (see below)
     *     @var string $page
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/search.messages';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['sort_dir', 'query', 'sort', 'count', 'token', 'highlight', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('sort_dir', ['string']);
        $optionsResolver->setAllowedTypes('query', ['string']);
        $optionsResolver->setAllowedTypes('sort', ['string']);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('highlight', ['bool']);
        $optionsResolver->setAllowedTypes('page', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Slack\Api\Model\SearchMessagesGetResponse200|\JoliCode\Slack\Api\Model\SearchMessagesGetResponsedefault
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\SearchMessagesGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\SearchMessagesGetResponsedefault', 'json');
    }
}
