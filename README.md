# AWS Labmda running PHP

This is a playground for running Symfony 4 with PHP 7.3 on AWS Lambda

## Deploying

Using [AWS SAM](https://docs.aws.amazon.com/lambda/latest/dg/serverless_app.html) to package and deploy application. Using SAM cli 0.16.1.

Configuration on template.yml. You will need to change it to point to your AWS Lambda layer.

A Makefile is available, just run

```
$ make profile=PROFILE bucket=S3 package
$ make profile=PROFILE stack=STACK deploy

```

## References

AWS Layer built using https://github.com/stackery/php-lambda-layer

## Tags

PHP 7.3, Symfony 4, AWS Lambda, AWS SAM, AWS API Gateway
