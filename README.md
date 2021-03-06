# AWS Lambda running PHP 7.3

This is a playground for running Symfony 4 with PHP 7.3 on AWS Lambda

## Deploying

Using [AWS SAM](https://docs.aws.amazon.com/lambda/latest/dg/serverless_app.html) to package and deploy application. Tested with version SAM cli 0.16.1.

Configuration on template.yml. You will need to change it to point to your AWS Lambda layer. Instructions on the references section on how to do it.

A Makefile is available, just run:

```
$ make profile=PROFILE bucket=S3 package
$ make profile=PROFILE stack=STACK deploy

```

## References

* [Build AWS Layer](https://github.com/stackery/php-lambda-layer)
* [Running a Serverless Lumen REST API on AWS Lambda](https://medium.com/@igliop/https-medium-com-igliop-running-a-serveless-lumen-rest-api-on-aws-lambda-804089b0852c)

## Tags

PHP 7.3, Symfony 4, AWS Lambda, AWS SAM, AWS API Gateway
