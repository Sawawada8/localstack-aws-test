FROM localstack/localstack:latest

ENV AWS_ACCESS_KEY_ID="test"
ENV AWS_SECRET_ACCESS_KEY="test"
ENV AWS_DEFAULT_REGION="us-east-1"

# 内部の aws cli で s3 bucket 作成
RUN aws --endpoint-url=http://localhost:4566 s3 mb s3://test