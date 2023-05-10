## RefundRangers

This is a gaming website that offers purchase and refund services. 

- **Static Website:** https://classprojectrefundrangers.s3.us-east-2.amazonaws.com/index1.html
- **S3 bucket location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers?region=us-east-2&tab=objects
- **S3 bucket second location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers2?region=us-east-2&tab=objects
- **S3 bucket refund location in AWS:** https://s3.console.aws.amazon.com/s3/buckets/classprojectrefundrangers3?region=us-east-2&tab=objects


### Credentials

- **Postgresql DB** - **Username**: *postgres* **PW**: *postgres2023$*
- **Ec2 instance Ubuntu2RDS user and PW** - **Ubuntu** Vl!0055480

### Resources

- **webservertestnetwork** - EC2 instance that runs webserver and can connect to postgressql server on AWS
- **PostgresSQLServer** - psql -h database-1.cyj4ppjzlsat.us-east-2.rds.amazonaws.com -U postgres
- **WorkingSite** - http://changemeipaddress This can change if the ec2 is stopped.
- **LoadBalancer Website** - http://alb-test-317635422.us-east-2.elb.amazonaws.com/index.html

# Instructions for setting up RDS and EC2 instances

## Restore RDS instance from snapshot

1. Go to AWS Management Console and navigate to RDS service.
2. Choose Snapshots from the left navigation panel.
3. Select the snapshot that you want to restore from the list.
4. Click on the "Actions" button and choose "Restore Snapshot".
5. In the "Restore DB Instance" page, choose the following options:
   - DB engine: PostgresSQL
   - DB instance class: Burstable classes db.t3.micro
   - Multi-AZ deployment: No
   - DB instance identifier: database-1
   - Public accessibility: Yes
   - Existing VPC security groups: delete default. enter these 2: webservertest rds-ec2-3
   - Availability Zone: us-east-2c
6. Click "Restore DB instance" button.

## Turn on an EC2 website instance

1. Go to AWS Management Console and navigate to EC2 service.
2. Choose Auto Scaling Groups from the left navigation panel.
3. Select DEMOasg from the list.
4. Under Group Details, click "Edit".
5. Change all three settings to 1.
6. Click "Save".

## Update files in Github

1. Make sure that the Database-1 endpoint is `database-1.cyj4ppjzlsat.us-east-2.rds.amazonaws.com`. If not, update the `processrefund.php` and `processserver.php` files in Github with the name of the `$host`.

## Test functionality

1. Visit http://alb-test-317635422.us-east-2.elb.amazonaws.com/index.html to test functionality before making any changes.
