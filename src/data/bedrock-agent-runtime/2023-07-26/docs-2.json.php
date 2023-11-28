<?php
// This file was auto-generated from sdk-root/src/data/bedrock-agent-runtime/2023-07-26/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon Bedrock Agent</p>', 'operations' => [ 'InvokeAgent' => '<p>Invokes the specified Bedrock model to run inference using the input provided in the request body.</p>', 'Retrieve' => '<p>Retrieve from knowledge base.</p>', 'RetrieveAndGenerate' => '<p>RetrieveAndGenerate API</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>This exception is thrown when a request is denied per access permissions</p>', 'refs' => [ 'ResponseStream$accessDeniedException' => NULL, ], ], 'ActionGroupInvocationInput' => [ 'base' => '<p>input to lambda used in action group</p>', 'refs' => [ 'InvocationInput$actionGroupInvocationInput' => NULL, ], ], 'ActionGroupInvocationOutput' => [ 'base' => '<p>output from lambda used in action group</p>', 'refs' => [ 'Observation$actionGroupInvocationOutput' => NULL, ], ], 'ActionGroupName' => [ 'base' => '<p>Agent Trace Action Group Name</p>', 'refs' => [ 'ActionGroupInvocationInput$actionGroupName' => NULL, ], ], 'ActionGroupOutputString' => [ 'base' => '<p>Agent Trace Action Group Lambda Invocation Output String</p>', 'refs' => [ 'ActionGroupInvocationOutput$text' => NULL, ], ], 'AgentAliasId' => [ 'base' => '<p>Identifier of the agent alias.</p>', 'refs' => [ 'InvokeAgentRequest$agentAliasId' => '<p>Identifier for Agent Alias</p>', 'TracePart$agentAliasId' => NULL, ], ], 'AgentId' => [ 'base' => '<p>Identifier of the agent.</p>', 'refs' => [ 'InvokeAgentRequest$agentId' => '<p>Identifier for Agent</p>', 'TracePart$agentId' => NULL, ], ], 'ApiPath' => [ 'base' => '<p>Agent Trace Action Group API path</p>', 'refs' => [ 'ActionGroupInvocationInput$apiPath' => NULL, ], ], 'Attribution' => [ 'base' => '<p>Citations associated with final agent response</p>', 'refs' => [ 'PayloadPart$attribution' => NULL, ], ], 'BadGatewayException' => [ 'base' => '<p>This exception is thrown when a request fails due to dependency like Lambda, Bedrock, STS resource</p>', 'refs' => [ 'ResponseStream$badGatewayException' => NULL, ], ], 'BedrockModelArn' => [ 'base' => '<p>Arn of a Bedrock model.</p>', 'refs' => [ 'KnowledgeBaseRetrieveAndGenerateConfiguration$modelArn' => NULL, ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'InvokeAgentRequest$endSession' => '<p>End current session</p>', 'InvokeAgentRequest$enableTrace' => '<p>Enable agent trace events for improved debugging</p>', 'PreProcessingParsedResponse$isValid' => '<p>Boolean value</p>', ], ], 'Citation' => [ 'base' => '<p>Citation associated with the agent response</p>', 'refs' => [ 'Citations$member' => NULL, ], ], 'Citations' => [ 'base' => '<p>List of citations</p>', 'refs' => [ 'Attribution$citations' => NULL, 'RetrieveAndGenerateResponse$citations' => NULL, ], ], 'ConflictException' => [ 'base' => '<p>This exception is thrown when there is a conflict performing an operation</p>', 'refs' => [ 'ResponseStream$conflictException' => NULL, ], ], 'ContentMap' => [ 'base' => '<p>Content type paramter map</p>', 'refs' => [ 'RequestBody$content' => NULL, ], ], 'CreationMode' => [ 'base' => '<p>indicates if agent uses default prompt or overriden prompt</p>', 'refs' => [ 'ModelInvocationInput$promptCreationMode' => NULL, 'ModelInvocationInput$parserMode' => NULL, ], ], 'DependencyFailedException' => [ 'base' => '<p>This exception is thrown when a request fails due to dependency like Lambda, Bedrock, STS resource due to a customer fault (i.e. bad configuration)</p>', 'refs' => [ 'ResponseStream$dependencyFailedException' => NULL, ], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'KnowledgeBaseRetrievalResult$score' => '<p>The relevance score of a result.</p>', ], ], 'FailureReasonString' => [ 'base' => '<p>Agent Trace Failed Reason String</p>', 'refs' => [ 'FailureTrace$failureReason' => NULL, ], ], 'FailureTrace' => [ 'base' => '<p>Trace Part which is emitted when agent trace could not be generated</p>', 'refs' => [ 'Trace$failureTrace' => NULL, ], ], 'FinalResponse' => [ 'base' => '<p>Agent finish output</p>', 'refs' => [ 'Observation$finalResponse' => NULL, ], ], 'FinalResponseString' => [ 'base' => '<p>Agent Trace Action Group Lambda Invocation Output String</p>', 'refs' => [ 'FinalResponse$text' => NULL, ], ], 'GeneratedResponsePart' => [ 'base' => '<p>Generate response part</p>', 'refs' => [ 'Citation$generatedResponsePart' => NULL, ], ], 'InferenceConfiguration' => [ 'base' => '<p>Configurations for controlling the inference response of an InvokeAgent API call</p>', 'refs' => [ 'ModelInvocationInput$inferenceConfiguration' => NULL, ], ], 'InputText' => [ 'base' => '<p>Model text input</p>', 'refs' => [ 'InvokeAgentRequest$inputText' => '<p>Input data in the format specified in the Content-Type request header.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>This exception is thrown if there was an unexpected error during processing of request</p>', 'refs' => [ 'ResponseStream$internalServerException' => NULL, ], ], 'InvocationInput' => [ 'base' => '<p>Trace Part which contains input details for action group or knowledge base</p>', 'refs' => [ 'OrchestrationTrace$invocationInput' => NULL, ], ], 'InvocationType' => [ 'base' => '<p>types of invocations</p>', 'refs' => [ 'InvocationInput$invocationType' => NULL, ], ], 'InvokeAgentRequest' => [ 'base' => '<p>InvokeAgent Request</p>', 'refs' => [], ], 'InvokeAgentResponse' => [ 'base' => '<p>InvokeAgent Response</p>', 'refs' => [], ], 'KmsKeyArn' => [ 'base' => '<p>A KMS key ARN</p>', 'refs' => [ 'RetrieveAndGenerateSessionConfiguration$kmsKeyArn' => '<p>The KMS key arn to encrypt the customer data of the session.</p>', ], ], 'KnowledgeBaseId' => [ 'base' => '<p>Identifier of the KnowledgeBase</p>', 'refs' => [ 'KnowledgeBaseRetrieveAndGenerateConfiguration$knowledgeBaseId' => NULL, 'RetrieveRequest$knowledgeBaseId' => NULL, ], ], 'KnowledgeBaseLookupInput' => [ 'base' => '<p>Input to lambda used in action group</p>', 'refs' => [ 'InvocationInput$knowledgeBaseLookupInput' => NULL, ], ], 'KnowledgeBaseLookupInputString' => [ 'base' => '<p>Agent Trace Action Group Lambda Invocation Output String</p>', 'refs' => [ 'KnowledgeBaseLookupInput$text' => NULL, ], ], 'KnowledgeBaseLookupOutput' => [ 'base' => '<p>Input to lambda used in action group</p>', 'refs' => [ 'Observation$knowledgeBaseLookupOutput' => NULL, ], ], 'KnowledgeBaseQuery' => [ 'base' => '<p>Knowledge base input query.</p>', 'refs' => [ 'RetrieveRequest$retrievalQuery' => NULL, ], ], 'KnowledgeBaseQueryTextString' => [ 'base' => NULL, 'refs' => [ 'KnowledgeBaseQuery$text' => '<p>Knowledge base input query in text</p>', ], ], 'KnowledgeBaseRetrievalConfiguration' => [ 'base' => '<p>Search parameters for retrieving from knowledge base.</p>', 'refs' => [ 'RetrieveRequest$retrievalConfiguration' => NULL, ], ], 'KnowledgeBaseRetrievalResult' => [ 'base' => '<p>Result item returned from a knowledge base retrieval.</p>', 'refs' => [ 'KnowledgeBaseRetrievalResults$member' => NULL, ], ], 'KnowledgeBaseRetrievalResults' => [ 'base' => '<p>List of knowledge base retrieval results</p>', 'refs' => [ 'RetrieveResponse$retrievalResults' => NULL, ], ], 'KnowledgeBaseRetrieveAndGenerateConfiguration' => [ 'base' => '<p>Configurations for retrieval and generation for knowledge base.</p>', 'refs' => [ 'RetrieveAndGenerateConfiguration$knowledgeBaseConfiguration' => NULL, ], ], 'KnowledgeBaseVectorSearchConfiguration' => [ 'base' => '<p>Knowledge base vector search configuration</p>', 'refs' => [ 'KnowledgeBaseRetrievalConfiguration$vectorSearchConfiguration' => NULL, ], ], 'KnowledgeBaseVectorSearchConfigurationNumberOfResultsInteger' => [ 'base' => NULL, 'refs' => [ 'KnowledgeBaseVectorSearchConfiguration$numberOfResults' => '<p>Top-K results to retrieve from knowledge base.</p>', ], ], 'LambdaArn' => [ 'base' => '<p>ARN of a Lambda.</p>', 'refs' => [ 'ModelInvocationInput$overrideLambda' => NULL, ], ], 'MaximumLength' => [ 'base' => '<p>Maximum length of output</p>', 'refs' => [ 'InferenceConfiguration$maximumLength' => NULL, ], ], 'MimeType' => [ 'base' => '<p>Content type of the request</p>', 'refs' => [ 'InvokeAgentResponse$contentType' => '<p>streaming response mimetype of the model</p>', ], ], 'ModelInvocationInput' => [ 'base' => '<p>Trace Part which contains information used to call Invoke Model</p>', 'refs' => [ 'OrchestrationTrace$modelInvocationInput' => NULL, 'PostProcessingTrace$modelInvocationInput' => NULL, 'PreProcessingTrace$modelInvocationInput' => NULL, ], ], 'NextToken' => [ 'base' => '<p>Opaque continuation token of previous paginated response.</p>', 'refs' => [ 'RetrieveRequest$nextToken' => NULL, 'RetrieveResponse$nextToken' => NULL, ], ], 'NonBlankString' => [ 'base' => '<p>Non Blank String</p>', 'refs' => [ 'AccessDeniedException$message' => NULL, 'BadGatewayException$message' => NULL, 'BadGatewayException$resourceName' => NULL, 'ConflictException$message' => NULL, 'DependencyFailedException$message' => NULL, 'DependencyFailedException$resourceName' => NULL, 'InternalServerException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ServiceQuotaExceededException$message' => NULL, 'ThrottlingException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'Observation' => [ 'base' => '<p>Trace Part which contains output details for action group or knowledge base or final response</p>', 'refs' => [ 'OrchestrationTrace$observation' => NULL, ], ], 'OrchestrationTrace' => [ 'base' => '<p>Trace contains intermidate response during orchestration</p>', 'refs' => [ 'Trace$orchestrationTrace' => NULL, ], ], 'OutputString' => [ 'base' => '<p>Agent Trace Output String</p>', 'refs' => [ 'PostProcessingParsedResponse$text' => NULL, ], ], 'Parameter' => [ 'base' => '<p>parameters included in action group invocation</p>', 'refs' => [ 'Parameters$member' => NULL, ], ], 'Parameters' => [ 'base' => '<p>list of parameters included in action group invocation</p>', 'refs' => [ 'ActionGroupInvocationInput$parameters' => NULL, 'ContentMap$value' => NULL, ], ], 'PartBody' => [ 'base' => '<p>PartBody of the payload in bytes</p>', 'refs' => [ 'PayloadPart$bytes' => NULL, ], ], 'PayloadPart' => [ 'base' => '<p>Base 64 endoded byte response</p>', 'refs' => [ 'ResponseStream$chunk' => NULL, ], ], 'PostProcessingModelInvocationOutput' => [ 'base' => '<p>Trace Part which contains information related to postprocessing</p>', 'refs' => [ 'PostProcessingTrace$modelInvocationOutput' => NULL, ], ], 'PostProcessingParsedResponse' => [ 'base' => '<p>Trace Part which contains information if preprocessing was successful</p>', 'refs' => [ 'PostProcessingModelInvocationOutput$parsedResponse' => NULL, ], ], 'PostProcessingTrace' => [ 'base' => '<p>Trace Part which contains information related to post processing step</p>', 'refs' => [ 'Trace$postProcessingTrace' => NULL, ], ], 'PreProcessingModelInvocationOutput' => [ 'base' => '<p>Trace Part which contains information related to preprocessing</p>', 'refs' => [ 'PreProcessingTrace$modelInvocationOutput' => NULL, ], ], 'PreProcessingParsedResponse' => [ 'base' => '<p>Trace Part which contains information if preprocessing was successful</p>', 'refs' => [ 'PreProcessingModelInvocationOutput$parsedResponse' => NULL, ], ], 'PreProcessingTrace' => [ 'base' => '<p>Trace Part which contains information related to preprocessing step</p>', 'refs' => [ 'Trace$preProcessingTrace' => NULL, ], ], 'PromptSessionAttributesMap' => [ 'base' => '<p>Session attributes that go to the prompt</p>', 'refs' => [ 'SessionState$promptSessionAttributes' => '<p>Prompt Session Attributes</p>', ], ], 'PromptText' => [ 'base' => '<p>Prompt Message</p>', 'refs' => [ 'ModelInvocationInput$text' => NULL, ], ], 'PromptType' => [ 'base' => '<p>types of prompts</p>', 'refs' => [ 'ModelInvocationInput$type' => NULL, ], ], 'Rationale' => [ 'base' => '<p>Trace Part which contains information related to reasoning</p>', 'refs' => [ 'OrchestrationTrace$rationale' => NULL, ], ], 'RationaleString' => [ 'base' => '<p>Agent Trace Rationale String</p>', 'refs' => [ 'PreProcessingParsedResponse$rationale' => NULL, 'Rationale$text' => NULL, ], ], 'RepromptResponse' => [ 'base' => '<p>Observation information if there were reprompts</p>', 'refs' => [ 'Observation$repromptResponse' => NULL, ], ], 'RequestBody' => [ 'base' => '<p>Request Body Content Map</p>', 'refs' => [ 'ActionGroupInvocationInput$requestBody' => NULL, ], ], 'ResourceNotFoundException' => [ 'base' => '<p>This exception is thrown when a resource referenced by the operation does not exist</p>', 'refs' => [ 'ResponseStream$resourceNotFoundException' => NULL, ], ], 'ResponseStream' => [ 'base' => '<p>Response body of is a stream</p>', 'refs' => [ 'InvokeAgentResponse$completion' => '<p>Inference response from the model in the format specified in the Content-Type response header.</p>', ], ], 'RetrievalResultContent' => [ 'base' => '<p>Content of a retrieval result.</p>', 'refs' => [ 'KnowledgeBaseRetrievalResult$content' => NULL, 'RetrievedReference$content' => NULL, ], ], 'RetrievalResultLocation' => [ 'base' => '<p>The source location of a retrieval result.</p>', 'refs' => [ 'KnowledgeBaseRetrievalResult$location' => NULL, 'RetrievedReference$location' => NULL, ], ], 'RetrievalResultLocationType' => [ 'base' => '<p>The location type of a retrieval result.</p>', 'refs' => [ 'RetrievalResultLocation$type' => NULL, ], ], 'RetrievalResultS3Location' => [ 'base' => '<p>The S3 location of a retrieval result.</p>', 'refs' => [ 'RetrievalResultLocation$s3Location' => NULL, ], ], 'RetrieveAndGenerateConfiguration' => [ 'base' => '<p>Configures the retrieval and generation for the session.</p>', 'refs' => [ 'RetrieveAndGenerateRequest$retrieveAndGenerateConfiguration' => NULL, ], ], 'RetrieveAndGenerateInput' => [ 'base' => '<p>Customer input of the turn</p>', 'refs' => [ 'RetrieveAndGenerateRequest$input' => NULL, ], ], 'RetrieveAndGenerateInputTextString' => [ 'base' => NULL, 'refs' => [ 'RetrieveAndGenerateInput$text' => '<p>Customer input of the turn in text</p>', ], ], 'RetrieveAndGenerateOutput' => [ 'base' => '<p>Service response of the turn</p>', 'refs' => [ 'RetrieveAndGenerateResponse$output' => NULL, ], ], 'RetrieveAndGenerateRequest' => [ 'base' => NULL, 'refs' => [], ], 'RetrieveAndGenerateResponse' => [ 'base' => NULL, 'refs' => [], ], 'RetrieveAndGenerateSessionConfiguration' => [ 'base' => '<p>Configures common parameters of the session.</p>', 'refs' => [ 'RetrieveAndGenerateRequest$sessionConfiguration' => NULL, ], ], 'RetrieveAndGenerateType' => [ 'base' => '<p>The type of RetrieveAndGenerate.</p>', 'refs' => [ 'RetrieveAndGenerateConfiguration$type' => NULL, ], ], 'RetrieveRequest' => [ 'base' => NULL, 'refs' => [], ], 'RetrieveResponse' => [ 'base' => NULL, 'refs' => [], ], 'RetrievedReference' => [ 'base' => '<p>Retrieved reference</p>', 'refs' => [ 'RetrievedReferences$member' => NULL, ], ], 'RetrievedReferences' => [ 'base' => '<p>list of retrieved references</p>', 'refs' => [ 'Citation$retrievedReferences' => NULL, 'KnowledgeBaseLookupOutput$retrievedReferences' => NULL, ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>This exception is thrown when a request is made beyond the service quota</p>', 'refs' => [ 'ResponseStream$serviceQuotaExceededException' => NULL, ], ], 'SessionAttributesMap' => [ 'base' => '<p>Session attributes are pass through attributes passed to the action group</p>', 'refs' => [ 'SessionState$sessionAttributes' => '<p>Session Attributes</p>', ], ], 'SessionId' => [ 'base' => '<p>Identifier of the session.</p>', 'refs' => [ 'InvokeAgentRequest$sessionId' => '<p>Identifier used for the current session</p>', 'InvokeAgentResponse$sessionId' => '<p>streaming response mimetype of the model</p>', 'RetrieveAndGenerateRequest$sessionId' => NULL, 'RetrieveAndGenerateResponse$sessionId' => NULL, 'TracePart$sessionId' => NULL, ], ], 'SessionState' => [ 'base' => '<p>Session state provided</p>', 'refs' => [ 'InvokeAgentRequest$sessionState' => '<p>Session state passed by customer. Base64 encoded json string representation of SessionState.</p>', ], ], 'Source' => [ 'base' => '<p>Parsing error source</p>', 'refs' => [ 'RepromptResponse$source' => NULL, ], ], 'Span' => [ 'base' => '<p>Span of text</p>', 'refs' => [ 'TextResponsePart$span' => NULL, ], ], 'SpanEndInteger' => [ 'base' => NULL, 'refs' => [ 'Span$end' => '<p>End of span</p>', ], ], 'SpanStartInteger' => [ 'base' => NULL, 'refs' => [ 'Span$start' => '<p>Start of span</p>', ], ], 'StopSequences' => [ 'base' => '<p>List of stop sequences</p>', 'refs' => [ 'InferenceConfiguration$stopSequences' => NULL, ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'ContentMap$key' => NULL, 'Parameter$name' => '<p>Name of parameter</p>', 'Parameter$type' => '<p>Type of parameter</p>', 'Parameter$value' => '<p>Value of parameter</p>', 'PromptSessionAttributesMap$key' => NULL, 'PromptSessionAttributesMap$value' => NULL, 'RepromptResponse$text' => '<p>Reprompt response text</p>', 'RetrievalResultContent$text' => '<p>Content of a retrieval result in text</p>', 'RetrievalResultS3Location$uri' => '<p>URI of S3 location</p>', 'RetrieveAndGenerateOutput$text' => '<p>Service response of the turn in text</p>', 'SessionAttributesMap$key' => NULL, 'SessionAttributesMap$value' => NULL, 'StopSequences$member' => NULL, 'TextResponsePart$text' => '<p>Response part in text</p>', ], ], 'Temperature' => [ 'base' => '<p>Controls randomness, higher values increase diversity</p>', 'refs' => [ 'InferenceConfiguration$temperature' => NULL, ], ], 'TextResponsePart' => [ 'base' => '<p>Text response part</p>', 'refs' => [ 'GeneratedResponsePart$textResponsePart' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p>This exception is thrown when the number of requests exceeds the limit</p>', 'refs' => [ 'ResponseStream$throttlingException' => NULL, ], ], 'TopK' => [ 'base' => '<p>Sample from the k most likely next tokens</p>', 'refs' => [ 'InferenceConfiguration$topK' => NULL, ], ], 'TopP' => [ 'base' => '<p>Cumulative probability cutoff for token selection</p>', 'refs' => [ 'InferenceConfiguration$topP' => NULL, ], ], 'Trace' => [ 'base' => '<p>Trace contains intermidate response for customer</p>', 'refs' => [ 'TracePart$trace' => NULL, ], ], 'TraceId' => [ 'base' => '<p>Identifier for trace</p>', 'refs' => [ 'FailureTrace$traceId' => NULL, 'InvocationInput$traceId' => NULL, 'ModelInvocationInput$traceId' => NULL, 'Observation$traceId' => NULL, 'PostProcessingModelInvocationOutput$traceId' => NULL, 'PreProcessingModelInvocationOutput$traceId' => NULL, 'Rationale$traceId' => NULL, ], ], 'TraceKnowledgeBaseId' => [ 'base' => '<p>Agent Trace Action Group Knowledge Base Id</p>', 'refs' => [ 'KnowledgeBaseLookupInput$knowledgeBaseId' => NULL, ], ], 'TracePart' => [ 'base' => '<p>Trace Part which contains intermidate response for customer</p>', 'refs' => [ 'ResponseStream$trace' => NULL, ], ], 'Type' => [ 'base' => '<p>types of observations</p>', 'refs' => [ 'Observation$type' => NULL, ], ], 'ValidationException' => [ 'base' => '<p>This exception is thrown when the request\'s input validation fails</p>', 'refs' => [ 'ResponseStream$validationException' => NULL, ], ], 'Verb' => [ 'base' => '<p>Agent Trace Action Group Action verb</p>', 'refs' => [ 'ActionGroupInvocationInput$verb' => NULL, ], ], ],];
