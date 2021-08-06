import Start from "./components/Start";
import GamePlatform from "./components/GamePlatform";
import Base from "./Base";

const routes = [
    {
        path: '/idiot-survival',
        component: Base,
        meta: {
            title: 'Start Screen'
        },
        children: [
            {
                path: '',
                component: Start,
                name: 'start'
            },
            {
                path: 'game',
                component: GamePlatform,
                name: 'game.index'
            }
        ]
    }
]

export default routes
