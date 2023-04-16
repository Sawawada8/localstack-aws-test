#!/bin/bash

# s3
# https://docs.localstack.cloud/user-guide/aws/s3/
docker compose exec localstack \
    aws --endpoint-url=http://localhost:4566 \
    s3 mb s3://test

# sns
# https://docs.localstack.cloud/user-guide/aws/sns/
docker compose exec localstack \
    aws --endpoint-url=http://localhost:4566 \
    sns create-topic --name test-topic
