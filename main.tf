provider "aws" {
    region = "us-east-2"
}

resource "aws_instance" "web" {
    ami = "ami-046f6df52d1930356"
    instance_type = "t2.micro"
    security_groups = [aws_security_group.web_traffic.name]
    user_data = file("server-script.sh")
    tags = {
        Name = "Production Refund Rangers"
    }
}


variable "ingress" {
    type = list(number)
    default = [22,80,443]
}

variable "egress" {
    type = list(number)
    default = [22,80,443]
}

resource "aws_security_group" "web_traffic" {
    name = "Allow Web Traffic"

    dynamic "ingress" {
        iterator = port
        for_each = var.ingress
        content {
            from_port = port.value
            to_port = port. value
            protocol = "TCP"
            cidr_blocks = ["0.0.0.0/0"]
        }
    }

        dynamic "egress" {
        iterator = port
        for_each = var.egress
        content {
            from_port = port.value
            to_port = port. value
            protocol = "TCP"
            cidr_blocks = ["0.0.0.0/0"]
        }
    }
}

output "PublicIP" {
    value = aws_instance.web.public_ip
}
