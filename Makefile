profile = titodevops
bucket = myphplambda
stack = my-php-lambda

package:
	sam package --template-file template.yaml --output-template-file serverless-output.yaml --s3-bucket $(bucket) --profile $(profile)

deploy:
	sam deploy --template-file serverless-output.yaml --stack-name $(stack) --capabilities CAPABILITY_IAM --profile $(profile)
