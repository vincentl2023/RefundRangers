provider "aws" {
  region = "us-east-2"
}

data "aws_security_group" "default" {
  name = "default"
}

resource "aws_instance" "web" {
  ami              = "ami-046f6df52d1930356"
  instance_type    = "t2.micro"
  security_groups  = [data.aws_security_group.default.id]
  user_data        = file("server-script.sh")
  tags = {
    Name = "Production Refund Rangers"
  }

  iam_instance_profile = "EC2CodeDeploy"
}

output "PublicIP" {
  value = aws_instance.web.public_ip
}

