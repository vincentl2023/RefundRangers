## RefundRangers

This is a gaming website that offers purchase and refund services. 

- **Static Website:** https://classprojectrefundrangers.s3.us-east-2.amazonaws.com/index1.html
- **S3 bucket location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers?region=us-east-2&tab=objects
- **S3 bucket second location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers2?region=us-east-2&tab=objects
- **S3 bucket refund location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers3?region=us-east-2&tab=objects


### Credentials

- **Postgresql DB** - **Username**: *postgres* **PW**: *postgres2023$*
- **Ec2 instance Ubuntu2RDS user and PW** - **Ubuntu** ** Vl!0055480

### Resources

- **webservertestnetwork** - EC2 instance that runs webserver and can connect to postgressql server on AWS
- **PostgresSQLServer** - psql -h database-1.cyj4ppjzlsat.us-east-2.rds.amazonaws.com -U postgres
- **WorkingSite** - http://changemeipaddress This can change if the ec2 is stopped.

### How to Run AMI and Attach to Pipeline for Updates from GitHub

This guide provides step-by-step instructions for launching an Amazon Machine Image (AMI) and attaching it to a pipeline for updates from GitHub. This guide assumes that you have an AWS account and basic knowledge of AWS services.

#### Launching an AMI

1. Go to the EC2 dashboard in your AWS console and navigate to the "AMIs" section.
2. Select the newest AMI.
3. Launch an instance from the selected AMI.
4. Give your instance a name.
5. Use "RR-Production" for Keypair.
6. Select "default" for the existing security group.
7. Click "Advanced Details".
8. Under "IAM Instance profile", select "EC2CodeDeploy".
9. Launch the instance.

#### Attaching to Pipeline for Updates from GitHub

1. Go to the CodeDeploy dashboard in your AWS console and navigate to the "Applications" section.
2. Click on the application name to edit it.
3. Select "RR_CICD-DP" and click "Edit".
4. Change "Tag Group 1" to your newly created EC2 instance in the "Value" field.
5. Save your changes.
6. Wait for your EC2 instance to build and load.
7. Test using the Public IP4 address (note that it must be http:// only, so remove the "s" from "https" if you want it to work).

Congratulations! You have successfully launched an AMI and attached it to a pipeline for updates from GitHub.
