FROM ubuntu:latest

ARG TIMEZONE
ARG USERNAME
ARG ROOT_PASSWORD
ARG USER_PASSWORD

COPY sshd_config /etc/ssh
COPY startup.sh /root

RUN ln -snf /usr/share/zoneinfo/$TIMEZONE /etc/localtime && \
    echo $TIMEZONE > /etc/timezone && \
    apt-get update && \
    apt-get -y install --no-install-recommends openssh-server python3-pip jq moreutils iptables fail2ban rsyslog sshpass && \
    chmod +x /root/startup.sh && \
    sed -i "s/username/$USERNAME/g" /root/startup.sh && \
    sed -i "s/username/$USERNAME/g" /etc/ssh/sshd_config && \
    useradd -m $USERNAME && \
    echo "root:$ROOT_PASSWORD" | chpasswd && \
    echo "$USERNAME:$USER_PASSWORD" | chpasswd


WORKDIR /home/$USERNAME

COPY pic1.png /home/$USERNAME
COPY pic2.png /home/$USERNAME



RUN mkdir .ssh && \
    ssh-keygen -q -t rsa -N '' -f ./.ssh/ssh_host_rsa_key && \
    ssh-keygen -q -t dsa -N '' -f ./.ssh/ssh_host_dsa_key && \
    ssh-keygen -q -t ecdsa -N '' -f ./.ssh/ssh_host_ecdsa_key && \
    ssh-keygen -q -t ed25519 -N '' -f ./.ssh/ssh_host_ed25519_key

USER root

ENTRYPOINT ["/bin/bash"]

CMD ["./startup.sh"]
