<?php
// This file was auto-generated from sdk-root/src/data/bedrock/2023-04-20/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'BatchDeleteEvaluationJob' => [ [ 'input' => [ 'jobIdentifiers' => [ 'arn:aws:bedrock:us-east-2:123456789012:evaluation-job/12rnxmplqv0v', 'arn:aws:bedrock:us-east-2:123456789012:evaluation-job/rispxmpl12rn', ], ], 'output' => [ 'errors' => [ [ 'code' => '404', 'jobIdentifier' => 'arn:aws:bedrock:us-east-2:123456789012:evaluation-job/rispxmpl12rn', 'message' => 'Unable to locate this job to delete.', ], ], 'evaluationJobs' => [ [ 'jobIdentifier' => 'arn:aws:bedrock:us-east-2:123456789012:evaluation-job/12rnxmplqv0v', 'jobStatus' => 'Deleting', ], ], ], 'description' => 'The following example shows a request to delete two model evaluation jobs, where one of the jobs is not found.', 'id' => 'example-1', 'title' => 'Delete evaluation jobs', ], ], ],];
