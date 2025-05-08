
# Allow IPv4 traffic on port 80 from Cloudflare
for cf_ip in $(curl -s https://www.cloudflare.com/ips-v4); do
  sudo ufw allow from $cf_ip to any port 80 proto tcp comment 'Allow HTTP from Cloudflare'
done

# Allow IPv6 traffic on port 80 from Cloudflare
for cf_ip6 in $(curl -s https://www.cloudflare.com/ips-v6); do
  sudo ufw allow from $cf_ip6 to any port 80 proto tcp comment 'Allow HTTP from Cloudflare (IPv6)'
done

