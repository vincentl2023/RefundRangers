provider "aws" {
  region = "us-east-2"
}

data "aws_security_group" "webservertest" {
  name = "webservertest"
}

data "aws_security_group" "rds-ec2-3" {
  name = "rds-ec2-3"
}

resource "aws_db_instance" "myRDS" {
  engine                = "postgres"
  instance_class        = "db.t3.micro"
  allocated_storage     = 200
  storage_type          = "gp2"
  identifier            = "database-1"
  name                  = "purchases"
  username              = "postgres"
  password              = "postgres2023$"
  port                  = 5432
  skip_final_snapshot   = true
  publicly_accessible  = true
  snapshot_identifier   = "testingfornewdb-05-10-2023"

  vpc_security_group_ids = [
    data.aws_security_group.webservertest.id,
    data.aws_security_group.rds-ec2-3.id
  ]
  
  availability_zone = "us-east-2c"
}

