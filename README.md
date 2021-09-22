# PvpSoup

###### Simple plugin allowing you to define a different border for each world on your server.

## Config
```yaml
#    _____        _____   _____
#   |  __ \      |  __ \ / ____|
#   | |__) |_   _| |__) | (___   ___  _   _ _ __
#   |  ___/\ \ / /  ___/ \___ \ / _ \| | | | '_ \
#   | |     \ V /| |     ____) | (_) | |_| | |_) |
#   |_|      \_/ |_|    |_____/ \___/ \__,_| .__/
#                                          | |
#
# items:
#   "id:meta":
#       heal: 2                                Number of PV that the item heal
#       m_type: POPUP|TIP|MESSAGE|NOTHING      Type of message that will be send to the player (NOTHING = No messsage)
#       message:                               Message that will be send to the player

items:
  "369:0":
    heal: 1
    m_type: "POPUP"
    message: "§6- §f+1 §6-"
  "370:0":
    heal: 2
    m_type: "TIP"
    message: "§6- §f+2 §6-"
  "371:0":
    heal: 3
    m_type: "MESSAGE"
    message: "§6- §f+3 §6-"
  "372:0":
    heal: 4
    m_type: "NOTHING"
    message: "§6- §f+4 §6-"

```
