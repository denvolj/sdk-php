<?php

namespace Pact\Service;

interface ServiceInterface
{
    /**
     * Returns formatted route with pasted parameters
     * 
     * @param string template
     * @param array values to insert in route template
     * @param array optional url parameters
     * @return string 
     */
    public function formatEndpoint(string $template, array $params, array $query): string;

/**
     * Preparing request
     * 
     * @param string HTTP method name 
     * @param string endpoint template string
     * @param array Route parameters that will be inserted in template
     * @param array Additional uri query
     * @param array HTTP Headers
     * @param string|resource|StreamInterface|null Request body
     */
    public function request(string $method, string $endpoint, array $endpointParams=[], array $query=[], array $headers=[], $body=null);
}
