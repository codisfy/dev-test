const Welcome = () => import('~/pages/welcome').then(m => m.default || m)
const Login = () => import('~/pages/auth/login').then(m => m.default || m)
const Register = () => import('~/pages/auth/register').then(m => m.default || m)
const PasswordEmail = () => import('~/pages/auth/password/email').then(m => m.default || m)
const PasswordReset = () => import('~/pages/auth/password/reset').then(m => m.default || m)
const NotFound = () => import('~/pages/errors/404').then(m => m.default || m)

const Home = () => import('~/pages/home').then(m => m.default || m)
const Settings = () => import('~/pages/settings/index').then(m => m.default || m)
const SettingsProfile = () => import('~/pages/settings/profile').then(m => m.default || m)
const SettingsPassword = () => import('~/pages/settings/password').then(m => m.default || m)

const Surveys = () => import('~/pages/surveys/index').then(m => m.default || m)
const SurveysList = () => import('~/pages/surveys/list').then(m => m.default || m)
const SurveysAdd = () => import('~/pages/surveys/add').then(m => m.default || m)
const SurveysEdit = () => import('~/pages/surveys/edit').then(m => m.default || m)


export default [
  { path: '/', name: 'welcome', component: Welcome },

  { path: '/login', name: 'login', component: Login },
  { path: '/register', name: 'register', component: Register },
  { path: '/password/reset', name: 'password.request', component: PasswordEmail },
  { path: '/password/reset/:token', name: 'password.reset', component: PasswordReset },

  { path: '/home', name: 'home', component: Home },
  { path: '/settings',
    component: Settings,
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: SettingsProfile },
      { path: 'password', name: 'settings.password', component: SettingsPassword }
    ] },

    { path: '/surveys',
    component: Surveys,
    children: [
      { path: '', name: 'surveys.list', component: SurveysList },
      { path: ':id/edit', name: 'surveys.edit', component: SurveysEdit },
      { path: 'new', name: 'surveys.add', component: SurveysAdd }
    ] },  

  { path: '*', component: NotFound }
]
