import Error404 from './Core/components/404'
import GameRoutes from './game/routes'

let routes = [
    ...GameRoutes,
    {
        path: '*',
        name: '404',
        component: Error404,
        meta: {
            title: '404 Page Not Found'
        }
    }
]

export default routes
