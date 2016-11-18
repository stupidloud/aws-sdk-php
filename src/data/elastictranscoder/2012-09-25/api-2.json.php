<?php
// This file was auto-generated from sdk-root/src/data/elastictranscoder/2012-09-25/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2012-09-25', 'endpointPrefix' => 'elastictranscoder', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Elastic Transcoder', 'signatureVersion' => 'v4', ], 'operations' => [ 'CancelJob' => [ 'name' => 'CancelJob', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2012-09-25/jobs/{Id}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CancelJobRequest', ], 'output' => [ 'shape' => 'CancelJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'CreateJob' => [ 'name' => 'CreateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/jobs', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateJobRequest', ], 'output' => [ 'shape' => 'CreateJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'CreatePipeline' => [ 'name' => 'CreatePipeline', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/pipelines', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreatePipelineRequest', ], 'output' => [ 'shape' => 'CreatePipelineResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'CreatePreset' => [ 'name' => 'CreatePreset', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/presets', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreatePresetRequest', ], 'output' => [ 'shape' => 'CreatePresetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DeletePipeline' => [ 'name' => 'DeletePipeline', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2012-09-25/pipelines/{Id}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeletePipelineRequest', ], 'output' => [ 'shape' => 'DeletePipelineResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DeletePreset' => [ 'name' => 'DeletePreset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2012-09-25/presets/{Id}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeletePresetRequest', ], 'output' => [ 'shape' => 'DeletePresetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ListJobsByPipeline' => [ 'name' => 'ListJobsByPipeline', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/jobsByPipeline/{PipelineId}', ], 'input' => [ 'shape' => 'ListJobsByPipelineRequest', ], 'output' => [ 'shape' => 'ListJobsByPipelineResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ListJobsByStatus' => [ 'name' => 'ListJobsByStatus', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/jobsByStatus/{Status}', ], 'input' => [ 'shape' => 'ListJobsByStatusRequest', ], 'output' => [ 'shape' => 'ListJobsByStatusResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ListPipelines' => [ 'name' => 'ListPipelines', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/pipelines', ], 'input' => [ 'shape' => 'ListPipelinesRequest', ], 'output' => [ 'shape' => 'ListPipelinesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ListPresets' => [ 'name' => 'ListPresets', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/presets', ], 'input' => [ 'shape' => 'ListPresetsRequest', ], 'output' => [ 'shape' => 'ListPresetsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ReadJob' => [ 'name' => 'ReadJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/jobs/{Id}', ], 'input' => [ 'shape' => 'ReadJobRequest', ], 'output' => [ 'shape' => 'ReadJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ReadPipeline' => [ 'name' => 'ReadPipeline', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/pipelines/{Id}', ], 'input' => [ 'shape' => 'ReadPipelineRequest', ], 'output' => [ 'shape' => 'ReadPipelineResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ReadPreset' => [ 'name' => 'ReadPreset', 'http' => [ 'method' => 'GET', 'requestUri' => '/2012-09-25/presets/{Id}', ], 'input' => [ 'shape' => 'ReadPresetRequest', ], 'output' => [ 'shape' => 'ReadPresetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'TestRole' => [ 'name' => 'TestRole', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/roleTests', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TestRoleRequest', ], 'output' => [ 'shape' => 'TestRoleResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], 'deprecated' => true, ], 'UpdatePipeline' => [ 'name' => 'UpdatePipeline', 'http' => [ 'method' => 'PUT', 'requestUri' => '/2012-09-25/pipelines/{Id}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdatePipelineRequest', ], 'output' => [ 'shape' => 'UpdatePipelineResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'UpdatePipelineNotifications' => [ 'name' => 'UpdatePipelineNotifications', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/pipelines/{Id}/notifications', ], 'input' => [ 'shape' => 'UpdatePipelineNotificationsRequest', ], 'output' => [ 'shape' => 'UpdatePipelineNotificationsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'UpdatePipelineStatus' => [ 'name' => 'UpdatePipelineStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/2012-09-25/pipelines/{Id}/status', ], 'input' => [ 'shape' => 'UpdatePipelineStatusRequest', ], 'output' => [ 'shape' => 'UpdatePipelineStatusResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'IncompatibleVersionException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServiceException', ], ], ], ], 'shapes' => [ 'AccessControl' => [ 'type' => 'string', 'pattern' => '(^FullControl$)|(^Read$)|(^ReadAcp$)|(^WriteAcp$)', ], 'AccessControls' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccessControl', ], 'max' => 30, ], 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'Artwork' => [ 'type' => 'structure', 'members' => [ 'InputKey' => [ 'shape' => 'WatermarkKey', ], 'MaxWidth' => [ 'shape' => 'DigitsOrAuto', ], 'MaxHeight' => [ 'shape' => 'DigitsOrAuto', ], 'SizingPolicy' => [ 'shape' => 'SizingPolicy', ], 'PaddingPolicy' => [ 'shape' => 'PaddingPolicy', ], 'AlbumArtFormat' => [ 'shape' => 'JpgOrPng', ], 'Encryption' => [ 'shape' => 'Encryption', ], ], ], 'Artworks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Artwork', ], ], 'Ascending' => [ 'type' => 'string', 'pattern' => '(^true$)|(^false$)', ], 'AspectRatio' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^1:1$)|(^4:3$)|(^3:2$)|(^16:9$)', ], 'AudioBitDepth' => [ 'type' => 'string', 'pattern' => '(^8$)|(^16$)|(^24$)|(^32$)', ], 'AudioBitOrder' => [ 'type' => 'string', 'pattern' => '(^LittleEndian$)', ], 'AudioBitRate' => [ 'type' => 'string', 'pattern' => '^\\d{1,3}$', ], 'AudioChannels' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^0$)|(^1$)|(^2$)', ], 'AudioCodec' => [ 'type' => 'string', 'pattern' => '(^AAC$)|(^vorbis$)|(^mp3$)|(^mp2$)|(^pcm$)|(^flac$)', ], 'AudioCodecOptions' => [ 'type' => 'structure', 'members' => [ 'Profile' => [ 'shape' => 'AudioCodecProfile', ], 'BitDepth' => [ 'shape' => 'AudioBitDepth', ], 'BitOrder' => [ 'shape' => 'AudioBitOrder', ], 'Signed' => [ 'shape' => 'AudioSigned', ], ], ], 'AudioCodecProfile' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^AAC-LC$)|(^HE-AAC$)|(^HE-AACv2$)', ], 'AudioPackingMode' => [ 'type' => 'string', 'pattern' => '(^SingleTrack$)|(^OneChannelPerTrack$)|(^OneChannelPerTrackWithMosTo8Tracks$)', ], 'AudioParameters' => [ 'type' => 'structure', 'members' => [ 'Codec' => [ 'shape' => 'AudioCodec', ], 'SampleRate' => [ 'shape' => 'AudioSampleRate', ], 'BitRate' => [ 'shape' => 'AudioBitRate', ], 'Channels' => [ 'shape' => 'AudioChannels', ], 'AudioPackingMode' => [ 'shape' => 'AudioPackingMode', ], 'CodecOptions' => [ 'shape' => 'AudioCodecOptions', ], ], ], 'AudioSampleRate' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^22050$)|(^32000$)|(^44100$)|(^48000$)|(^96000$)|(^192000$)', ], 'AudioSigned' => [ 'type' => 'string', 'pattern' => '(^Unsigned$)|(^Signed$)', ], 'Base64EncodedString' => [ 'type' => 'string', 'pattern' => '^$|(^(?:[A-Za-z0-9\\+/]{4})*(?:[A-Za-z0-9\\+/]{2}==|[A-Za-z0-9\\+/]{3}=)?$)', ], 'BucketName' => [ 'type' => 'string', 'pattern' => '^(\\w|\\.|-){1,255}$', ], 'CancelJobRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'CancelJobResponse' => [ 'type' => 'structure', 'members' => [], ], 'CaptionFormat' => [ 'type' => 'structure', 'members' => [ 'Format' => [ 'shape' => 'CaptionFormatFormat', ], 'Pattern' => [ 'shape' => 'CaptionFormatPattern', ], 'Encryption' => [ 'shape' => 'Encryption', ], ], ], 'CaptionFormatFormat' => [ 'type' => 'string', 'pattern' => '(^mov-text$)|(^srt$)|(^scc$)|(^webvtt$)|(^dfxp$)|(^cea-708$)', ], 'CaptionFormatPattern' => [ 'type' => 'string', 'pattern' => '(^$)|(^.*\\{language\\}.*$)', ], 'CaptionFormats' => [ 'type' => 'list', 'member' => [ 'shape' => 'CaptionFormat', ], 'max' => 4, ], 'CaptionMergePolicy' => [ 'type' => 'string', 'pattern' => '(^MergeOverride$)|(^MergeRetain$)|(^Override$)', ], 'CaptionSource' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'LongKey', ], 'Language' => [ 'shape' => 'Key', ], 'TimeOffset' => [ 'shape' => 'TimeOffset', ], 'Label' => [ 'shape' => 'Name', ], 'Encryption' => [ 'shape' => 'Encryption', ], ], ], 'CaptionSources' => [ 'type' => 'list', 'member' => [ 'shape' => 'CaptionSource', ], 'max' => 20, ], 'Captions' => [ 'type' => 'structure', 'members' => [ 'MergePolicy' => [ 'shape' => 'CaptionMergePolicy', 'deprecated' => true, ], 'CaptionSources' => [ 'shape' => 'CaptionSources', 'deprecated' => true, ], 'CaptionFormats' => [ 'shape' => 'CaptionFormats', ], ], ], 'Clip' => [ 'type' => 'structure', 'members' => [ 'TimeSpan' => [ 'shape' => 'TimeSpan', ], ], 'deprecated' => true, ], 'CodecOption' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'CodecOptions' => [ 'type' => 'map', 'key' => [ 'shape' => 'CodecOption', ], 'value' => [ 'shape' => 'CodecOption', ], 'max' => 30, ], 'Composition' => [ 'type' => 'list', 'member' => [ 'shape' => 'Clip', ], 'deprecated' => true, ], 'CreateJobOutput' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'Key', ], 'ThumbnailPattern' => [ 'shape' => 'ThumbnailPattern', ], 'ThumbnailEncryption' => [ 'shape' => 'Encryption', ], 'Rotate' => [ 'shape' => 'Rotate', ], 'PresetId' => [ 'shape' => 'Id', ], 'SegmentDuration' => [ 'shape' => 'FloatString', ], 'Watermarks' => [ 'shape' => 'JobWatermarks', ], 'AlbumArt' => [ 'shape' => 'JobAlbumArt', ], 'Composition' => [ 'shape' => 'Composition', 'deprecated' => true, ], 'Captions' => [ 'shape' => 'Captions', ], 'Encryption' => [ 'shape' => 'Encryption', ], ], ], 'CreateJobOutputs' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateJobOutput', ], 'max' => 30, ], 'CreateJobPlaylist' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'Filename', ], 'Format' => [ 'shape' => 'PlaylistFormat', ], 'OutputKeys' => [ 'shape' => 'OutputKeys', ], 'HlsContentProtection' => [ 'shape' => 'HlsContentProtection', ], 'PlayReadyDrm' => [ 'shape' => 'PlayReadyDrm', ], ], ], 'CreateJobPlaylists' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateJobPlaylist', ], 'max' => 30, ], 'CreateJobRequest' => [ 'type' => 'structure', 'required' => [ 'PipelineId', ], 'members' => [ 'PipelineId' => [ 'shape' => 'Id', ], 'Input' => [ 'shape' => 'JobInput', ], 'Inputs' => [ 'shape' => 'JobInputs', ], 'Output' => [ 'shape' => 'CreateJobOutput', ], 'Outputs' => [ 'shape' => 'CreateJobOutputs', ], 'OutputKeyPrefix' => [ 'shape' => 'Key', ], 'Playlists' => [ 'shape' => 'CreateJobPlaylists', ], 'UserMetadata' => [ 'shape' => 'UserMetadata', ], ], ], 'CreateJobResponse' => [ 'type' => 'structure', 'members' => [ 'Job' => [ 'shape' => 'Job', ], ], ], 'CreatePipelineRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'InputBucket', 'Role', ], 'members' => [ 'Name' => [ 'shape' => 'Name', ], 'InputBucket' => [ 'shape' => 'BucketName', ], 'OutputBucket' => [ 'shape' => 'BucketName', ], 'Role' => [ 'shape' => 'Role', ], 'AwsKmsKeyArn' => [ 'shape' => 'KeyArn', ], 'Notifications' => [ 'shape' => 'Notifications', ], 'ContentConfig' => [ 'shape' => 'PipelineOutputConfig', ], 'ThumbnailConfig' => [ 'shape' => 'PipelineOutputConfig', ], ], ], 'CreatePipelineResponse' => [ 'type' => 'structure', 'members' => [ 'Pipeline' => [ 'shape' => 'Pipeline', ], 'Warnings' => [ 'shape' => 'Warnings', ], ], ], 'CreatePresetRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'Container', ], 'members' => [ 'Name' => [ 'shape' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], 'Container' => [ 'shape' => 'PresetContainer', ], 'Video' => [ 'shape' => 'VideoParameters', ], 'Audio' => [ 'shape' => 'AudioParameters', ], 'Thumbnails' => [ 'shape' => 'Thumbnails', ], ], ], 'CreatePresetResponse' => [ 'type' => 'structure', 'members' => [ 'Preset' => [ 'shape' => 'Preset', ], 'Warning' => [ 'shape' => 'String', ], ], ], 'DeletePipelineRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'DeletePipelineResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeletePresetRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'DeletePresetResponse' => [ 'type' => 'structure', 'members' => [], ], 'Description' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'DetectedProperties' => [ 'type' => 'structure', 'members' => [ 'Width' => [ 'shape' => 'NullableInteger', ], 'Height' => [ 'shape' => 'NullableInteger', ], 'FrameRate' => [ 'shape' => 'FloatString', ], 'FileSize' => [ 'shape' => 'NullableLong', ], 'DurationMillis' => [ 'shape' => 'NullableLong', ], ], ], 'Digits' => [ 'type' => 'string', 'pattern' => '^\\d{1,5}$', ], 'DigitsOrAuto' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^\\d{2,4}$)', ], 'Encryption' => [ 'type' => 'structure', 'members' => [ 'Mode' => [ 'shape' => 'EncryptionMode', ], 'Key' => [ 'shape' => 'Base64EncodedString', ], 'KeyMd5' => [ 'shape' => 'Base64EncodedString', ], 'InitializationVector' => [ 'shape' => 'ZeroTo255String', ], ], ], 'EncryptionMode' => [ 'type' => 'string', 'pattern' => '(^s3$)|(^s3-aws-kms$)|(^aes-cbc-pkcs7$)|(^aes-ctr$)|(^aes-gcm$)', ], 'ExceptionMessages' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'Filename' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'FixedGOP' => [ 'type' => 'string', 'pattern' => '(^true$)|(^false$)', ], 'FloatString' => [ 'type' => 'string', 'pattern' => '^\\d{1,5}(\\.\\d{0,5})?$', ], 'FrameRate' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^10$)|(^15$)|(^23.97$)|(^24$)|(^25$)|(^29.97$)|(^30$)|(^50$)|(^60$)', ], 'Grantee' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'GranteeType' => [ 'type' => 'string', 'pattern' => '(^Canonical$)|(^Email$)|(^Group$)', ], 'HlsContentProtection' => [ 'type' => 'structure', 'members' => [ 'Method' => [ 'shape' => 'HlsContentProtectionMethod', ], 'Key' => [ 'shape' => 'Base64EncodedString', ], 'KeyMd5' => [ 'shape' => 'Base64EncodedString', ], 'InitializationVector' => [ 'shape' => 'ZeroTo255String', ], 'LicenseAcquisitionUrl' => [ 'shape' => 'ZeroTo512String', ], 'KeyStoragePolicy' => [ 'shape' => 'KeyStoragePolicy', ], ], ], 'HlsContentProtectionMethod' => [ 'type' => 'string', 'pattern' => '(^aes-128$)', ], 'HorizontalAlign' => [ 'type' => 'string', 'pattern' => '(^Left$)|(^Right$)|(^Center$)', ], 'Id' => [ 'type' => 'string', 'pattern' => '^\\d{13}-\\w{6}$', ], 'IncompatibleVersionException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InputCaptions' => [ 'type' => 'structure', 'members' => [ 'MergePolicy' => [ 'shape' => 'CaptionMergePolicy', ], 'CaptionSources' => [ 'shape' => 'CaptionSources', ], ], ], 'Interlaced' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^true$)|(^false$)', ], 'InternalServiceException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, 'fault' => true, ], 'Job' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Id', ], 'Arn' => [ 'shape' => 'String', ], 'PipelineId' => [ 'shape' => 'Id', ], 'Input' => [ 'shape' => 'JobInput', ], 'Inputs' => [ 'shape' => 'JobInputs', ], 'Output' => [ 'shape' => 'JobOutput', ], 'Outputs' => [ 'shape' => 'JobOutputs', ], 'OutputKeyPrefix' => [ 'shape' => 'Key', ], 'Playlists' => [ 'shape' => 'Playlists', ], 'Status' => [ 'shape' => 'JobStatus', ], 'UserMetadata' => [ 'shape' => 'UserMetadata', ], 'Timing' => [ 'shape' => 'Timing', ], ], ], 'JobAlbumArt' => [ 'type' => 'structure', 'members' => [ 'MergePolicy' => [ 'shape' => 'MergePolicy', ], 'Artwork' => [ 'shape' => 'Artworks', ], ], ], 'JobContainer' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^3gp$)|(^asf$)|(^avi$)|(^divx$)|(^flv$)|(^mkv$)|(^mov$)|(^mp4$)|(^mpeg$)|(^mpeg-ps$)|(^mpeg-ts$)|(^mxf$)|(^ogg$)|(^ts$)|(^vob$)|(^wav$)|(^webm$)|(^mp3$)|(^m4a$)|(^aac$)', ], 'JobInput' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'LongKey', ], 'FrameRate' => [ 'shape' => 'FrameRate', ], 'Resolution' => [ 'shape' => 'Resolution', ], 'AspectRatio' => [ 'shape' => 'AspectRatio', ], 'Interlaced' => [ 'shape' => 'Interlaced', ], 'Container' => [ 'shape' => 'JobContainer', ], 'Encryption' => [ 'shape' => 'Encryption', ], 'TimeSpan' => [ 'shape' => 'TimeSpan', ], 'InputCaptions' => [ 'shape' => 'InputCaptions', ], 'DetectedProperties' => [ 'shape' => 'DetectedProperties', ], ], ], 'JobInputs' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobInput', ], 'max' => 10000, ], 'JobOutput' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'String', ], 'Key' => [ 'shape' => 'Key', ], 'ThumbnailPattern' => [ 'shape' => 'ThumbnailPattern', ], 'ThumbnailEncryption' => [ 'shape' => 'Encryption', ], 'Rotate' => [ 'shape' => 'Rotate', ], 'PresetId' => [ 'shape' => 'Id', ], 'SegmentDuration' => [ 'shape' => 'FloatString', ], 'Status' => [ 'shape' => 'JobStatus', ], 'StatusDetail' => [ 'shape' => 'Description', ], 'Duration' => [ 'shape' => 'NullableLong', ], 'Width' => [ 'shape' => 'NullableInteger', ], 'Height' => [ 'shape' => 'NullableInteger', ], 'FrameRate' => [ 'shape' => 'FloatString', ], 'FileSize' => [ 'shape' => 'NullableLong', ], 'DurationMillis' => [ 'shape' => 'NullableLong', ], 'Watermarks' => [ 'shape' => 'JobWatermarks', ], 'AlbumArt' => [ 'shape' => 'JobAlbumArt', ], 'Composition' => [ 'shape' => 'Composition', 'deprecated' => true, ], 'Captions' => [ 'shape' => 'Captions', ], 'Encryption' => [ 'shape' => 'Encryption', ], 'AppliedColorSpaceConversion' => [ 'shape' => 'String', ], ], ], 'JobOutputs' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobOutput', ], ], 'JobStatus' => [ 'type' => 'string', 'pattern' => '(^Submitted$)|(^Progressing$)|(^Complete$)|(^Canceled$)|(^Error$)', ], 'JobWatermark' => [ 'type' => 'structure', 'members' => [ 'PresetWatermarkId' => [ 'shape' => 'PresetWatermarkId', ], 'InputKey' => [ 'shape' => 'WatermarkKey', ], 'Encryption' => [ 'shape' => 'Encryption', ], ], ], 'JobWatermarks' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobWatermark', ], ], 'Jobs' => [ 'type' => 'list', 'member' => [ 'shape' => 'Job', ], ], 'JpgOrPng' => [ 'type' => 'string', 'pattern' => '(^jpg$)|(^png$)', ], 'Key' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'KeyArn' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'KeyIdGuid' => [ 'type' => 'string', 'pattern' => '(^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$)|(^[0-9A-Fa-f]{32}$)', ], 'KeyStoragePolicy' => [ 'type' => 'string', 'pattern' => '(^NoStore$)|(^WithVariantPlaylists$)', ], 'KeyframesMaxDist' => [ 'type' => 'string', 'pattern' => '^\\d{1,6}$', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'ListJobsByPipelineRequest' => [ 'type' => 'structure', 'required' => [ 'PipelineId', ], 'members' => [ 'PipelineId' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'PipelineId', ], 'Ascending' => [ 'shape' => 'Ascending', 'location' => 'querystring', 'locationName' => 'Ascending', ], 'PageToken' => [ 'shape' => 'Id', 'location' => 'querystring', 'locationName' => 'PageToken', ], ], ], 'ListJobsByPipelineResponse' => [ 'type' => 'structure', 'members' => [ 'Jobs' => [ 'shape' => 'Jobs', ], 'NextPageToken' => [ 'shape' => 'Id', ], ], ], 'ListJobsByStatusRequest' => [ 'type' => 'structure', 'required' => [ 'Status', ], 'members' => [ 'Status' => [ 'shape' => 'JobStatus', 'location' => 'uri', 'locationName' => 'Status', ], 'Ascending' => [ 'shape' => 'Ascending', 'location' => 'querystring', 'locationName' => 'Ascending', ], 'PageToken' => [ 'shape' => 'Id', 'location' => 'querystring', 'locationName' => 'PageToken', ], ], ], 'ListJobsByStatusResponse' => [ 'type' => 'structure', 'members' => [ 'Jobs' => [ 'shape' => 'Jobs', ], 'NextPageToken' => [ 'shape' => 'Id', ], ], ], 'ListPipelinesRequest' => [ 'type' => 'structure', 'members' => [ 'Ascending' => [ 'shape' => 'Ascending', 'location' => 'querystring', 'locationName' => 'Ascending', ], 'PageToken' => [ 'shape' => 'Id', 'location' => 'querystring', 'locationName' => 'PageToken', ], ], ], 'ListPipelinesResponse' => [ 'type' => 'structure', 'members' => [ 'Pipelines' => [ 'shape' => 'Pipelines', ], 'NextPageToken' => [ 'shape' => 'Id', ], ], ], 'ListPresetsRequest' => [ 'type' => 'structure', 'members' => [ 'Ascending' => [ 'shape' => 'Ascending', 'location' => 'querystring', 'locationName' => 'Ascending', ], 'PageToken' => [ 'shape' => 'Id', 'location' => 'querystring', 'locationName' => 'PageToken', ], ], ], 'ListPresetsResponse' => [ 'type' => 'structure', 'members' => [ 'Presets' => [ 'shape' => 'Presets', ], 'NextPageToken' => [ 'shape' => 'Id', ], ], ], 'LongKey' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'MaxFrameRate' => [ 'type' => 'string', 'pattern' => '(^10$)|(^15$)|(^23.97$)|(^24$)|(^25$)|(^29.97$)|(^30$)|(^50$)|(^60$)', ], 'MergePolicy' => [ 'type' => 'string', 'pattern' => '(^Replace$)|(^Prepend$)|(^Append$)|(^Fallback$)', ], 'Name' => [ 'type' => 'string', 'max' => 40, 'min' => 1, ], 'NonEmptyBase64EncodedString' => [ 'type' => 'string', 'pattern' => '(^(?:[A-Za-z0-9\\+/]{4})*(?:[A-Za-z0-9\\+/]{2}==|[A-Za-z0-9\\+/]{3}=)?$)', ], 'Notifications' => [ 'type' => 'structure', 'members' => [ 'Progressing' => [ 'shape' => 'SnsTopic', ], 'Completed' => [ 'shape' => 'SnsTopic', ], 'Warning' => [ 'shape' => 'SnsTopic', ], 'Error' => [ 'shape' => 'SnsTopic', ], ], ], 'NullableInteger' => [ 'type' => 'integer', ], 'NullableLong' => [ 'type' => 'long', ], 'OneTo512String' => [ 'type' => 'string', 'max' => 512, 'min' => 1, ], 'Opacity' => [ 'type' => 'string', 'pattern' => '^\\d{1,3}(\\.\\d{0,20})?$', ], 'OutputKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'Key', ], 'max' => 30, ], 'PaddingPolicy' => [ 'type' => 'string', 'pattern' => '(^Pad$)|(^NoPad$)', ], 'Permission' => [ 'type' => 'structure', 'members' => [ 'GranteeType' => [ 'shape' => 'GranteeType', ], 'Grantee' => [ 'shape' => 'Grantee', ], 'Access' => [ 'shape' => 'AccessControls', ], ], ], 'Permissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Permission', ], 'max' => 30, ], 'Pipeline' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Id', ], 'Arn' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'Name', ], 'Status' => [ 'shape' => 'PipelineStatus', ], 'InputBucket' => [ 'shape' => 'BucketName', ], 'OutputBucket' => [ 'shape' => 'BucketName', ], 'Role' => [ 'shape' => 'Role', ], 'AwsKmsKeyArn' => [ 'shape' => 'KeyArn', ], 'Notifications' => [ 'shape' => 'Notifications', ], 'ContentConfig' => [ 'shape' => 'PipelineOutputConfig', ], 'ThumbnailConfig' => [ 'shape' => 'PipelineOutputConfig', ], ], ], 'PipelineOutputConfig' => [ 'type' => 'structure', 'members' => [ 'Bucket' => [ 'shape' => 'BucketName', ], 'StorageClass' => [ 'shape' => 'StorageClass', ], 'Permissions' => [ 'shape' => 'Permissions', ], ], ], 'PipelineStatus' => [ 'type' => 'string', 'pattern' => '(^Active$)|(^Paused$)', ], 'Pipelines' => [ 'type' => 'list', 'member' => [ 'shape' => 'Pipeline', ], ], 'PixelsOrPercent' => [ 'type' => 'string', 'pattern' => '(^\\d{1,3}(\\.\\d{0,5})?%$)|(^\\d{1,4}?px$)', ], 'PlayReadyDrm' => [ 'type' => 'structure', 'members' => [ 'Format' => [ 'shape' => 'PlayReadyDrmFormatString', ], 'Key' => [ 'shape' => 'NonEmptyBase64EncodedString', ], 'KeyMd5' => [ 'shape' => 'NonEmptyBase64EncodedString', ], 'KeyId' => [ 'shape' => 'KeyIdGuid', ], 'InitializationVector' => [ 'shape' => 'ZeroTo255String', ], 'LicenseAcquisitionUrl' => [ 'shape' => 'OneTo512String', ], ], ], 'PlayReadyDrmFormatString' => [ 'type' => 'string', 'pattern' => '(^microsoft$)|(^discretix-3.0$)', ], 'Playlist' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'Filename', ], 'Format' => [ 'shape' => 'PlaylistFormat', ], 'OutputKeys' => [ 'shape' => 'OutputKeys', ], 'HlsContentProtection' => [ 'shape' => 'HlsContentProtection', ], 'PlayReadyDrm' => [ 'shape' => 'PlayReadyDrm', ], 'Status' => [ 'shape' => 'JobStatus', ], 'StatusDetail' => [ 'shape' => 'Description', ], ], ], 'PlaylistFormat' => [ 'type' => 'string', 'pattern' => '(^HLSv3$)|(^HLSv4$)|(^Smooth$)|(^MPEG-DASH$)', ], 'Playlists' => [ 'type' => 'list', 'member' => [ 'shape' => 'Playlist', ], ], 'Preset' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'Id', ], 'Arn' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], 'Container' => [ 'shape' => 'PresetContainer', ], 'Audio' => [ 'shape' => 'AudioParameters', ], 'Video' => [ 'shape' => 'VideoParameters', ], 'Thumbnails' => [ 'shape' => 'Thumbnails', ], 'Type' => [ 'shape' => 'PresetType', ], ], ], 'PresetContainer' => [ 'type' => 'string', 'pattern' => '(^mp4$)|(^ts$)|(^webm$)|(^mp3$)|(^flac$)|(^oga$)|(^ogg$)|(^fmp4$)|(^mpg$)|(^flv$)|(^gif$)|(^mxf$)|(^wav$)', ], 'PresetType' => [ 'type' => 'string', 'pattern' => '(^System$)|(^Custom$)', ], 'PresetWatermark' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'PresetWatermarkId', ], 'MaxWidth' => [ 'shape' => 'PixelsOrPercent', ], 'MaxHeight' => [ 'shape' => 'PixelsOrPercent', ], 'SizingPolicy' => [ 'shape' => 'WatermarkSizingPolicy', ], 'HorizontalAlign' => [ 'shape' => 'HorizontalAlign', ], 'HorizontalOffset' => [ 'shape' => 'PixelsOrPercent', ], 'VerticalAlign' => [ 'shape' => 'VerticalAlign', ], 'VerticalOffset' => [ 'shape' => 'PixelsOrPercent', ], 'Opacity' => [ 'shape' => 'Opacity', ], 'Target' => [ 'shape' => 'Target', ], ], ], 'PresetWatermarkId' => [ 'type' => 'string', 'max' => 40, 'min' => 1, ], 'PresetWatermarks' => [ 'type' => 'list', 'member' => [ 'shape' => 'PresetWatermark', ], ], 'Presets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Preset', ], ], 'ReadJobRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'ReadJobResponse' => [ 'type' => 'structure', 'members' => [ 'Job' => [ 'shape' => 'Job', ], ], ], 'ReadPipelineRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'ReadPipelineResponse' => [ 'type' => 'structure', 'members' => [ 'Pipeline' => [ 'shape' => 'Pipeline', ], 'Warnings' => [ 'shape' => 'Warnings', ], ], ], 'ReadPresetRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], ], ], 'ReadPresetResponse' => [ 'type' => 'structure', 'members' => [ 'Preset' => [ 'shape' => 'Preset', ], ], ], 'Resolution' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^\\d{1,5}x\\d{1,5}$)', ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'Role' => [ 'type' => 'string', 'pattern' => '^arn:aws:iam::\\w{12}:role/.+$', ], 'Rotate' => [ 'type' => 'string', 'pattern' => '(^auto$)|(^0$)|(^90$)|(^180$)|(^270$)', ], 'SizingPolicy' => [ 'type' => 'string', 'pattern' => '(^Fit$)|(^Fill$)|(^Stretch$)|(^Keep$)|(^ShrinkToFit$)|(^ShrinkToFill$)', ], 'SnsTopic' => [ 'type' => 'string', 'pattern' => '(^$)|(^arn:aws:sns:.*:\\w{12}:.+$)', ], 'SnsTopics' => [ 'type' => 'list', 'member' => [ 'shape' => 'SnsTopic', ], 'max' => 30, ], 'StorageClass' => [ 'type' => 'string', 'pattern' => '(^ReducedRedundancy$)|(^Standard$)', ], 'String' => [ 'type' => 'string', ], 'Success' => [ 'type' => 'string', 'pattern' => '(^true$)|(^false$)', ], 'Target' => [ 'type' => 'string', 'pattern' => '(^Content$)|(^Frame$)', ], 'TestRoleRequest' => [ 'type' => 'structure', 'required' => [ 'Role', 'InputBucket', 'OutputBucket', 'Topics', ], 'members' => [ 'Role' => [ 'shape' => 'Role', ], 'InputBucket' => [ 'shape' => 'BucketName', ], 'OutputBucket' => [ 'shape' => 'BucketName', ], 'Topics' => [ 'shape' => 'SnsTopics', ], ], 'deprecated' => true, ], 'TestRoleResponse' => [ 'type' => 'structure', 'members' => [ 'Success' => [ 'shape' => 'Success', ], 'Messages' => [ 'shape' => 'ExceptionMessages', ], ], 'deprecated' => true, ], 'ThumbnailPattern' => [ 'type' => 'string', 'pattern' => '(^$)|(^.*\\{count\\}.*$)', ], 'ThumbnailResolution' => [ 'type' => 'string', 'pattern' => '^\\d{1,5}x\\d{1,5}$', ], 'Thumbnails' => [ 'type' => 'structure', 'members' => [ 'Format' => [ 'shape' => 'JpgOrPng', ], 'Interval' => [ 'shape' => 'Digits', ], 'Resolution' => [ 'shape' => 'ThumbnailResolution', ], 'AspectRatio' => [ 'shape' => 'AspectRatio', ], 'MaxWidth' => [ 'shape' => 'DigitsOrAuto', ], 'MaxHeight' => [ 'shape' => 'DigitsOrAuto', ], 'SizingPolicy' => [ 'shape' => 'SizingPolicy', ], 'PaddingPolicy' => [ 'shape' => 'PaddingPolicy', ], ], ], 'Time' => [ 'type' => 'string', 'pattern' => '(^\\d{1,5}(\\.\\d{0,3})?$)|(^([0-1]?[0-9]:|2[0-3]:)?([0-5]?[0-9]:)?[0-5]?[0-9](\\.\\d{0,3})?$)', ], 'TimeOffset' => [ 'type' => 'string', 'pattern' => '(^[+-]?\\d{1,5}(\\.\\d{0,3})?$)|(^[+-]?([0-1]?[0-9]:|2[0-3]:)?([0-5]?[0-9]:)?[0-5]?[0-9](\\.\\d{0,3})?$)', ], 'TimeSpan' => [ 'type' => 'structure', 'members' => [ 'StartTime' => [ 'shape' => 'Time', ], 'Duration' => [ 'shape' => 'Time', ], ], ], 'Timing' => [ 'type' => 'structure', 'members' => [ 'SubmitTimeMillis' => [ 'shape' => 'NullableLong', ], 'StartTimeMillis' => [ 'shape' => 'NullableLong', ], 'FinishTimeMillis' => [ 'shape' => 'NullableLong', ], ], ], 'UpdatePipelineNotificationsRequest' => [ 'type' => 'structure', 'required' => [ 'Id', 'Notifications', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], 'Notifications' => [ 'shape' => 'Notifications', ], ], ], 'UpdatePipelineNotificationsResponse' => [ 'type' => 'structure', 'members' => [ 'Pipeline' => [ 'shape' => 'Pipeline', ], ], ], 'UpdatePipelineRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], 'Name' => [ 'shape' => 'Name', ], 'InputBucket' => [ 'shape' => 'BucketName', ], 'Role' => [ 'shape' => 'Role', ], 'AwsKmsKeyArn' => [ 'shape' => 'KeyArn', ], 'Notifications' => [ 'shape' => 'Notifications', ], 'ContentConfig' => [ 'shape' => 'PipelineOutputConfig', ], 'ThumbnailConfig' => [ 'shape' => 'PipelineOutputConfig', ], ], ], 'UpdatePipelineResponse' => [ 'type' => 'structure', 'members' => [ 'Pipeline' => [ 'shape' => 'Pipeline', ], 'Warnings' => [ 'shape' => 'Warnings', ], ], ], 'UpdatePipelineStatusRequest' => [ 'type' => 'structure', 'required' => [ 'Id', 'Status', ], 'members' => [ 'Id' => [ 'shape' => 'Id', 'location' => 'uri', 'locationName' => 'Id', ], 'Status' => [ 'shape' => 'PipelineStatus', ], ], ], 'UpdatePipelineStatusResponse' => [ 'type' => 'structure', 'members' => [ 'Pipeline' => [ 'shape' => 'Pipeline', ], ], ], 'UserMetadata' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VerticalAlign' => [ 'type' => 'string', 'pattern' => '(^Top$)|(^Bottom$)|(^Center$)', ], 'VideoBitRate' => [ 'type' => 'string', 'pattern' => '(^\\d{2,5}$)|(^auto$)', ], 'VideoCodec' => [ 'type' => 'string', 'pattern' => '(^H\\.264$)|(^vp8$)|(^vp9$)|(^mpeg2$)|(^gif$)', ], 'VideoParameters' => [ 'type' => 'structure', 'members' => [ 'Codec' => [ 'shape' => 'VideoCodec', ], 'CodecOptions' => [ 'shape' => 'CodecOptions', ], 'KeyframesMaxDist' => [ 'shape' => 'KeyframesMaxDist', ], 'FixedGOP' => [ 'shape' => 'FixedGOP', ], 'BitRate' => [ 'shape' => 'VideoBitRate', ], 'FrameRate' => [ 'shape' => 'FrameRate', ], 'MaxFrameRate' => [ 'shape' => 'MaxFrameRate', ], 'Resolution' => [ 'shape' => 'Resolution', ], 'AspectRatio' => [ 'shape' => 'AspectRatio', ], 'MaxWidth' => [ 'shape' => 'DigitsOrAuto', ], 'MaxHeight' => [ 'shape' => 'DigitsOrAuto', ], 'DisplayAspectRatio' => [ 'shape' => 'AspectRatio', ], 'SizingPolicy' => [ 'shape' => 'SizingPolicy', ], 'PaddingPolicy' => [ 'shape' => 'PaddingPolicy', ], 'Watermarks' => [ 'shape' => 'PresetWatermarks', ], ], ], 'Warning' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], ], ], 'Warnings' => [ 'type' => 'list', 'member' => [ 'shape' => 'Warning', ], ], 'WatermarkKey' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '(^.{1,1020}.jpg$)|(^.{1,1019}.jpeg$)|(^.{1,1020}.png$)', ], 'WatermarkSizingPolicy' => [ 'type' => 'string', 'pattern' => '(^Fit$)|(^Stretch$)|(^ShrinkToFit$)', ], 'ZeroTo255String' => [ 'type' => 'string', 'max' => 255, 'min' => 0, ], 'ZeroTo512String' => [ 'type' => 'string', 'max' => 512, 'min' => 0, ], ],];
